<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    protected $fillable = ['code','game_id','customer_id','booster_id','title','server','account_login','account_password','target','notes','requirements','budget','escrow_amount','platform_fee','booster_receive','deadline_at','status','progress','accepted_at','submitted_at','completed_at'];
    protected $casts = ['deadline_at'=>'datetime','accepted_at'=>'datetime','submitted_at'=>'datetime','completed_at'=>'datetime','budget'=>'integer','escrow_amount'=>'integer','platform_fee'=>'integer','booster_receive'=>'integer'];
    public function game(){ return $this->belongsTo(Game::class); }
    public function customer(){ return $this->belongsTo(User::class,'customer_id'); }
    public function booster(){ return $this->belongsTo(User::class,'booster_id'); }
    public function messages(){ return $this->hasMany(ChatMessage::class); }
    public function disputes(){ return $this->hasMany(Dispute::class); }
}
