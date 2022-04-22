<?php

namespace App\Http\Requests\Question;

use Illuminate\Foundation\Http\FormRequest;

class FrontendQuestionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'text' => 'required|string',
            'theme' => 'filled|string'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
