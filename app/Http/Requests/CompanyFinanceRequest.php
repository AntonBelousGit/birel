<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyFinanceRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'date' => 'required',
            'transaction_name' => 'required',
            'amount_raised' => 'required',
            'raised_to_date' => 'required',
            'issue_price' => 'required',
            'post_money_valuation' => 'required',
            'key_investors' => 'required',
            'type_currency' => 'filled|in:$,€',
            'info' => 'required',
            'info.type_currency' => 'filled|in:$,€',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
