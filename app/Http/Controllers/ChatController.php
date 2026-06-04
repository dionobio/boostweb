<?php
namespace App\Http\Controllers;
use App\Models\Order; use Illuminate\Http\Request;
class ChatController extends Controller
{
    public function store(Request $request, Order $order){
        abort_unless(auth()->id()===$order->customer_id || auth()->id()===$order->booster_id || auth()->user()?->role==='admin', 403);
        $data = $request->validate(['message'=>'nullable|max:1000','proof'=>'nullable|image|max:4096']);
        $path = $request->file('proof')?->store('proofs','public');
        $order->messages()->create(['user_id'=>auth()->id(),'message'=>$data['message'] ?? '', 'proof_path'=>$path, 'type'=>$path ? 'proof' : 'text']);
        return back()->with('success','Đã gửi tin nhắn.');
    }
}
