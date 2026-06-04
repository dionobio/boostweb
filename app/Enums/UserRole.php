<?php
namespace App\Enums;

enum UserRole: string
{
    case Customer = 'customer';
    case Booster = 'booster';
    case Admin = 'admin';
}
