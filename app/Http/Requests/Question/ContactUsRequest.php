<?php

namespace App\Http\Requests\Question;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'name' => 'required|string',
            'msg' => ''
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
