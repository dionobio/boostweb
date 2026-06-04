<?php
namespace App\Enums;

enum OrderStatus: string
{
    case Draft = 'draft';
    case WaitingForPayment = 'waiting_for_payment';
    case Open = 'open';
    case Accepted = 'accepted';
    case InProgress = 'in_progress';
    case Submitted = 'submitted';
    case Completed = 'completed';
    case Disputed = 'disputed';
    case Cancelled = 'cancelled';
    case Refunded = 'refunded';
}
