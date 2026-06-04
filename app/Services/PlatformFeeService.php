<?php
namespace App\Services;

class PlatformFeeService
{
    public function calculate(int $amount): array
    {
        $rate = (float) config('boostxvn.platform_fee_rate', 0.08);
        $fee = (int) round($amount * $rate);
        return ['amount'=>$amount, 'fee'=>$fee, 'booster_receive'=>$amount - $fee, 'rate'=>$rate];
    }
}
