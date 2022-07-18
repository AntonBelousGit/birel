<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyLfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'companyName'           =>'required',
            'companyAddress'        =>'required',
            'description'           => 'nullable',
            'deal_structure'        => 'required|in:direct,spv,forward contract,direct or spv,any',
            'share_type'            => 'required|in:Preferred,Common,Preferred and Common,any',
            'type'                  => 'filled|in:ASK,BID,TENDER,LFO',
            'sub_type'              => 'filled|in:ASK,BID',
            'volume'                => 'nullable',
            'share_number'          => 'nullable',
        ];
    }
}
