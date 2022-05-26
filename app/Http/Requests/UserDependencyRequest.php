<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserDependencyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'type' => 'required',
            'active_order' => 'required'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
