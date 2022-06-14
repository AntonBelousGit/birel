<?php

namespace App\Http\Requests\Orders;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'companyName' => 'string',
            'category_id' => '',
            'valuation' => '',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
