<?php

namespace App\Http\Requests\Filter;

use Illuminate\Foundation\Http\FormRequest;

class AllOrderFilterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'type' => '',
            'sort' => '',
            'search' => '',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
