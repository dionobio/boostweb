<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Transaction extends Model
{
    protected $fillable = ['wallet_id','user_id','order_id','type','amount','balance_before','balance_after','status','description','meta'];
    protected $casts = ['meta'=>'array','amount'=>'integer','balance_before'=>'integer','balance_after'=>'integer'];
    public function wallet(){ return $this->belongsTo(Wallet::class); }
    public function user(){ return $this->belongsTo(User::class); }
    public function order(){ return $this->belongsTo(Order::class); }
}
