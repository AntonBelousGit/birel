<?php

namespace App\Http\Requests\Orders;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateOrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'company_id'            => 'exists:App\Models\Company,id',
            'description'           => 'required|string',
            'deal_structure'        => 'required|in:direct,spv,forward contract,direct or spv',
            'share_type'            => 'required|in:Preferred,Common,Preferred and Common',
            'share_type_currency'   => 'filled|in:usd,eur',
            'type'                  => 'required|in:ASK,BID'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function validated()
    {
        $request = $this->validator->validated();

        $request['user_id'] = Auth::id();

        return $request;
    }
}
