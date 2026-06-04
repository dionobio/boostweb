<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreOrderRequest extends FormRequest
{
    public function authorize(): bool { return auth()->check(); }
    public function rules(): array { return ['game_id'=>'required|exists:games,id','title'=>'required|min:8|max:180','server'=>'required|max:120','account_login'=>'required|max:190','account_password'=>'required|max:190','target'=>'required|max:255','notes'=>'nullable|max:2000','requirements'=>'nullable|max:2000','budget'=>'required|integer|min:50000','deadline_at'=>'required|date|after:now']; }
}
