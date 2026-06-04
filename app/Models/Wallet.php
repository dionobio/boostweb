<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Wallet extends Model
{
    protected $fillable = ['user_id','available_balance','locked_balance','pending_withdrawal'];
    protected $casts = ['available_balance'=>'integer','locked_balance'=>'integer','pending_withdrawal'=>'integer'];
    public function user(){ return $this->belongsTo(User::class); }
    public function transactions(){ return $this->hasMany(Transaction::class); }
}
