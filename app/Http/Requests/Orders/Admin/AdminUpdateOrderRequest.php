<?php

namespace App\Http\Requests\Orders\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateOrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'company_id'            => 'exists:App\Models\Company,id',
            'description'           => 'nullable',
            'deal_structure'        => 'required|in:direct,spv,forward contract,direct or spv,any',
            'share_type'            => 'required|in:Preferred,Common,Preferred and Common,any',
            'share_type_currency'   => 'filled|in:$,€',
//            'type'                  => 'filled|in:ASK,BID,TENDER,LOOKING',
//            'sub_type'              => 'filled|in:ASK,BID',
            'volume'                => 'required',
            'share_price'           => 'filled',
            'share_number'          => 'required_unless:share_price,null',
            'status'                => 'required',
            'valuation'             => 'filled'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
