<?php
namespace App\Http\Controllers;
use App\Models\Order; use App\Models\Transaction;
class DashboardController extends Controller
{
    public function customer(){ $orders=Order::with('game','booster')->where('customer_id',auth()->id())->latest()->get(); return view('dashboard.customer',compact('orders')); }
    public function booster(){ $orders=Order::with('game','customer')->where('booster_id',auth()->id())->latest()->get(); $income=auth()->user()->wallet?->transactions()->where('type','escrow_release')->sum('amount') ?? 0; return view('dashboard.booster',compact('orders','income')); }
}
