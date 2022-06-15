<?php

namespace App\Http\Requests\Filter;

use Illuminate\Foundation\Http\FormRequest;

class OneCompanyFilterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'type' => '',
            'sort' => ''
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
