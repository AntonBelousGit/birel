<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyAdminRequest extends FormRequest
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
            'companyName'=>'required',
            'companyAddress'=>'required',
            'founded'=>'date',
            'total_funding'=>'nullable',
            'image'=>'nullable',
            'description'=>'nullable',
            'valuation'=>'nullable',
            'status'=>'nullable',
        ];
    }
}
