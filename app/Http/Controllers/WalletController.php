<?php
namespace App\Http\Controllers;
use App\Http\Requests\DepositRequest; use App\Services\WalletService;
class WalletController extends Controller
{
    public function index(){ $wallet = auth()->user()->wallet()->firstOrCreate(['user_id'=>auth()->id()]); return view('wallet.index', ['wallet'=>$wallet->load('transactions.order')]); }
    public function deposit(DepositRequest $request, WalletService $wallet){ $wallet->deposit($request->user(), (int)$request->amount); return back()->with('success','Nạp ví demo thành công.'); }
}
