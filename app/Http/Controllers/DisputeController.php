<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreDisputeRequest; use App\Models\Order;
class DisputeController extends Controller
{
    public function create(){ return view('disputes.create', ['orders'=>Order::where('customer_id',auth()->id())->orWhere('booster_id',auth()->id())->latest()->get()]); }
    public function store(StoreDisputeRequest $request){
        $path = $request->file('evidence')?->store('proofs','public');
        $order = Order::findOrFail($request->order_id);
        $order->disputes()->create([...$request->validated(), 'created_by'=>auth()->id(), 'evidence_path'=>$path, 'status'=>'open']);
        $order->update(['status'=>'disputed']);
        return redirect()->route('orders.room',$order)->with('success','Đã tạo tranh chấp, admin sẽ xử lý.');
    }
}
