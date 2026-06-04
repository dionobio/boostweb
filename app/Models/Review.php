<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Review extends Model
{
    protected $fillable = ['order_id','reviewer_id','reviewee_id','rating','comment'];
}
