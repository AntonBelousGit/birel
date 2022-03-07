<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWatchlistRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'company_id' => 'required',
            'type'=> 'filled'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
