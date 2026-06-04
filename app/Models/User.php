<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = ['name','email','phone','password','role','rating','completed_orders','is_verified','is_banned'];
    protected $hidden = ['password','remember_token'];
    protected function casts(): array { return ['password'=>'hashed','is_verified'=>'boolean','is_banned'=>'boolean','rating'=>'decimal:2']; }
    public function wallet(){ return $this->hasOne(Wallet::class); }
    public function customerOrders(){ return $this->hasMany(Order::class, 'customer_id'); }
    public function boosterOrders(){ return $this->hasMany(Order::class, 'booster_id'); }
    public function isAdmin(): bool { return $this->role === 'admin'; }
    public function isBooster(): bool { return $this->role === 'booster'; }
}
