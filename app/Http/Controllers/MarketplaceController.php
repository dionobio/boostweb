<?php
namespace App\Http\Controllers;
use App\Models\Game; use App\Models\Order; use Illuminate\Http\Request;
class MarketplaceController extends Controller
{
    public function index(Request $request){
        $orders = Order::with('game','customer','booster')
            ->when($request->game, fn($q)=>$q->whereHas('game', fn($g)=>$g->where('slug',$request->game)))
            ->when($request->status, fn($q)=>$q->where('status',$request->status))
            ->latest()->paginate(12)->withQueryString();
        return view('marketplace.index', ['orders'=>$orders, 'games'=>Game::where('is_active',true)->get()]);
    }
}
