<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'linkedin' => ['nullable', 'string', 'max:255'],
            'fund_address' => ['nullable', 'string', 'max:255'],
            'fund_name' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(Auth::user())],
            'password' => 'required|string|min:5|confirmed',
            'receive_news' => ['nullable'],
            'position' => ['nullable', 'string', 'max:255'],
            'type' => ['sometimes', 'integer'],
            'role_id' => 'required',
            'user_type_id' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}