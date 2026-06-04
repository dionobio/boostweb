<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class DepositRequest extends FormRequest
{
    public function authorize(): bool { return auth()->check(); }
    public function rules(): array { return ['amount'=>'required|integer|min:10000|max:100000000']; }
}
