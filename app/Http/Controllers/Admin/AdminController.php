<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; use App\Models\Order; use App\Models\User; use App\Models\Transaction; use App\Models\Dispute;
class AdminController extends Controller
{
    public function index(){ return view('admin.index', ['orders'=>Order::with('game','customer','booster')->latest()->take(8)->get(), 'users'=>User::latest()->take(8)->get(), 'revenue'=>Transaction::where('type','platform_fee')->sum('amount') * -1, 'openDisputes'=>Dispute::where('status','open')->count()]); }
    public function orders(){ return view('admin.orders', ['orders'=>Order::with('game','customer','booster')->latest()->paginate(20)]); }
    public function users(){ return view('admin.users', ['users'=>User::latest()->paginate(20)]); }
    public function disputes(){ return view('admin.disputes', ['disputes'=>Dispute::with('order','creator')->latest()->paginate(20)]); }
}
