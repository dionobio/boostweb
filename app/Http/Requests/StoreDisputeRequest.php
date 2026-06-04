<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreDisputeRequest extends FormRequest
{
    public function authorize(): bool { return auth()->check(); }
    public function rules(): array { return ['order_id'=>'required|exists:orders,id','reason'=>'required|max:180','description'=>'required|max:3000','evidence'=>'nullable|image|max:4096']; }
}
