<?php

namespace App\Http\Requests\Settings\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingNotificationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'new_message' => 'sometimes',
            'new_order_subscribe_company' => 'sometimes',
            'new_order_company_have_your_order' => 'sometimes',
            'new_system_message' => 'sometimes',
        ];
    }

    public function validated()
    {
        return [
            'new_message' => $this->boolean('new_message'),
            'new_order_subscribe_company' => $this->boolean('new_order_subscribe_company'),
            'new_order_company_have_your_order' => $this->boolean('new_order_company_have_your_order'),
            'new_system_message' => $this->boolean('new_system_message'),
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
