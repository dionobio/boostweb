<?php
namespace App\Services;

use App\Models\User;
use App\Models\Wallet;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class WalletService
{
    public function deposit(User $user, int $amount, string $description = 'Nạp ví demo'): Wallet
    {
        return DB::transaction(function () use ($user, $amount, $description) {
            $wallet = $user->wallet()->lockForUpdate()->firstOrCreate(['user_id'=>$user->id]);
            $before = $wallet->available_balance;
            $wallet->increment('available_balance', $amount);
            $wallet->refresh();
            Transaction::create(['wallet_id'=>$wallet->id,'user_id'=>$user->id,'type'=>'deposit','amount'=>$amount,'balance_before'=>$before,'balance_after'=>$wallet->available_balance,'status'=>'completed','description'=>$description]);
            return $wallet;
        });
    }
    public function lockEscrow(User $customer, int $amount, int $orderId): Wallet
    {
        return DB::transaction(function () use ($customer, $amount, $orderId) {
            $wallet = $customer->wallet()->lockForUpdate()->first();
            if (!$wallet || $wallet->available_balance < $amount) throw new RuntimeException('Số dư không đủ để khóa ký quỹ.');
            $before = $wallet->available_balance;
            $wallet->decrement('available_balance', $amount);
            $wallet->increment('locked_balance', $amount);
            $wallet->refresh();
            Transaction::create(['wallet_id'=>$wallet->id,'user_id'=>$customer->id,'order_id'=>$orderId,'type'=>'escrow_lock','amount'=>-$amount,'balance_before'=>$before,'balance_after'=>$wallet->available_balance,'status'=>'completed','description'=>'Khóa ký quỹ đơn hàng']);
            return $wallet;
        });
    }
    public function releaseToBooster(User $customer, User $booster, int $orderId, int $amount, int $fee, int $boosterReceive): void
    {
        DB::transaction(function () use ($customer,$booster,$orderId,$amount,$fee,$boosterReceive) {
            $customerWallet = $customer->wallet()->lockForUpdate()->first();
            $boosterWallet = $booster->wallet()->lockForUpdate()->firstOrCreate(['user_id'=>$booster->id]);
            if ($customerWallet->locked_balance < $amount) throw new RuntimeException('Ký quỹ không đủ.');
            $customerWallet->decrement('locked_balance', $amount);
            $before = $boosterWallet->available_balance;
            $boosterWallet->increment('available_balance', $boosterReceive);
            Transaction::create(['wallet_id'=>$boosterWallet->id,'user_id'=>$booster->id,'order_id'=>$orderId,'type'=>'escrow_release','amount'=>$boosterReceive,'balance_before'=>$before,'balance_after'=>$before+$boosterReceive,'status'=>'completed','description'=>'Nhận tiền hoàn thành đơn']);
            Transaction::create(['wallet_id'=>$customerWallet->id,'user_id'=>$customer->id,'order_id'=>$orderId,'type'=>'platform_fee','amount'=>-$fee,'balance_before'=>$customerWallet->available_balance,'balance_after'=>$customerWallet->available_balance,'status'=>'completed','description'=>'Phí nền tảng']);
        });
    }
}
