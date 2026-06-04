<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Game extends Model
{
    protected $fillable = ['name','slug','icon','description','is_active'];
    protected function casts(): array { return ['is_active'=>'boolean']; }
    public function orders(){ return $this->hasMany(Order::class); }
}
