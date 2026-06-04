<?php
namespace App\Services;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Str;

class OrderService
{
    public function __construct(private PlatformFeeService $feeService, private WalletService $walletService) {}
    public function createOpenOrder(User $customer, array $data): Order
    {
        $fee = $this->feeService->calculate((int) $data['budget']);
        $order = Order::create([
            ...$data,
            'customer_id'=>$customer->id,
            'code'=>'ORD-'.now()->format('Ymd').'-'.strtoupper(Str::random(5)),
            'escrow_amount'=>$fee['amount'],
            'platform_fee'=>$fee['fee'],
            'booster_receive'=>$fee['booster_receive'],
            'status'=>'waiting_for_payment',
            'progress'=>0,
        ]);
        $this->walletService->lockEscrow($customer, $order->escrow_amount, $order->id);
        $order->update(['status'=>'open']);
        return $order;
    }
}
