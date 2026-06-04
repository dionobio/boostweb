<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ChatMessage extends Model
{
    protected $fillable = ['order_id','user_id','message','proof_path','type'];
    public function order(){ return $this->belongsTo(Order::class); }
    public function user(){ return $this->belongsTo(User::class); }
}
