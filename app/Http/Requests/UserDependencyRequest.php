<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserDependencyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'role_id' => 'required',
            'user_type_id' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
