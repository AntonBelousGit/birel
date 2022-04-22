<?php

namespace App\Http\Requests\Question;

use Illuminate\Foundation\Http\FormRequest;

class AdminQuestionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'status' => 'required'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
