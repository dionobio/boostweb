<?php
namespace App\Http\Controllers;
use App\Models\Game; use App\Models\Order;
class HomeController extends Controller
{
    public function index(){ return view('home', ['games'=>Game::withCount('orders')->where('is_active',true)->get(), 'topOrders'=>Order::with('game','customer')->latest()->take(3)->get()]); }
}
