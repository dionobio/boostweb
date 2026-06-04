<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreOrderRequest; use App\Models\Game; use App\Models\Order; use App\Services\OrderService; use App\Services\WalletService; use Illuminate\Http\Request;
class OrderController extends Controller
{
    public function create(){ return view('orders.create', ['games'=>Game::where('is_active',true)->get()]); }
    public function store(StoreOrderRequest $request, OrderService $orders){
        try { $order = $orders->createOpenOrder($request->user(), $request->validated()); }
        catch (\Throwable $e) { return back()->withErrors(['budget'=>$e->getMessage()])->withInput(); }
        return redirect()->route('orders.show',$order)->with('success','Đã tạo đơn và khóa tiền ký quỹ.');
    }
    public function show(Order $order){ $order->load('game','customer','booster'); return view('orders.show', compact('order')); }
    public function accept(Order $order){
        abort_unless(auth()->check() && auth()->user()->role === 'booster', 403);
        abort_unless($order->status === 'open', 422, 'Đơn không còn mở.');
        $order->update(['booster_id'=>auth()->id(),'status'=>'accepted','accepted_at'=>now()]);
        return redirect()->route('orders.room',$order)->with('success','Bạn đã nhận đơn thành công.');
    }
    public function room(Order $order){
        abort_unless(auth()->id()===$order->customer_id || auth()->id()===$order->booster_id || auth()->user()?->role === 'admin', 403);
        return view('orders.room', ['order'=>$order->load('game','customer','booster','messages.user')]);
    }
    public function submit(Order $order){
        abort_unless(auth()->id()===$order->booster_id, 403);
        $order->update(['status'=>'submitted','progress'=>100,'submitted_at'=>now()]);
        return back()->with('success','Đã gửi yêu cầu xác nhận hoàn thành.');
    }
    public function complete(Order $order, WalletService $wallet){
        abort_unless(auth()->id()===$order->customer_id, 403);
        abort_unless($order->booster, 422);
        $wallet->releaseToBooster($order->customer, $order->booster, $order->id, $order->escrow_amount, $order->platform_fee, $order->booster_receive);
        $order->update(['status'=>'completed','completed_at'=>now(),'progress'=>100]);
        return back()->with('success','Đã hoàn thành đơn và giải ngân cho booster.');
    }
}
