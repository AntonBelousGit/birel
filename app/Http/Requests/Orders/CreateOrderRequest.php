<?php

namespace App\Http\Requests\Orders;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'company_id'            => 'exists:App\Models\Company,id',
            'description'           => 'required|string',
            'deal_structure'        => 'required|in:direct,spv,forward contract,direct or spv,any',
            'share_type'            => 'required|in:Preferred,Common,Preferred and Common,any',
            'share_type_currency'   => 'filled|in:$,€',
            'type'                  => 'filled|in:ASK,BID,TENDER,LOOKING',
            'sub_type'              => 'filled|in:ASK,BID',
            'volume'                => 'required',
            'share_price'           => 'filled|integer',
            'share_number'          => 'required_unless:share_price,null',
            'valuation'             => 'filled'

        ];
    }

    public function validated()
    {
        $request = $this->validator->validated();

        $request['user_id'] = Auth::id();

        if ($this->has('share_price')) {
            $request['share_price_encode'] = encode_bigNumber($this->share_price);
        }

        return $request;
    }


}
