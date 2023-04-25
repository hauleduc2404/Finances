<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class KYCBankRequest extends FormRequest
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
            'card_placeholder_name' => 'required|string',
            'card_identity_owner' => 'required|string',
            'bank_vendor' => 'required|string',
            'card_number' => 'required|string',
        ];
    }
}
