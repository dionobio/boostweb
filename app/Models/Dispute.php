<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Dispute extends Model
{
    protected $fillable = ['order_id','created_by','reason','description','evidence_path','status','admin_note','resolution'];
    public function order(){ return $this->belongsTo(Order::class); }
    public function creator(){ return $this->belongsTo(User::class,'created_by'); }
}
