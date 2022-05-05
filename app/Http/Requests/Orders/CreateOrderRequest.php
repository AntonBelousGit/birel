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
            'type'                  => 'required|in:ASK,BID',
            'volume'                => 'required',
            'share_price'           => 'filled|integer',
            'share_number'          => 'required_if:share_price',
            'valuation'             => 'filled'

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

        if ($this->has('share_price')) {
            $request['share_price_decode'] = encode_bigNumber($this->share_price);
        }

        return $request;
    }
}