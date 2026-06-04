<?php
namespace App\Enums;

enum TransactionType: string
{
    case Deposit = 'deposit';
    case Withdraw = 'withdraw';
    case EscrowLock = 'escrow_lock';
    case EscrowRelease = 'escrow_release';
    case PlatformFee = 'platform_fee';
    case Refund = 'refund';
    case Penalty = 'penalty';
}
