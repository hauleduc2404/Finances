<?php

namespace App\Http\Requests\Admin\Landing\ApplyLoan;

use Illuminate\Foundation\Http\FormRequest;

class AddApplyLoanRequest extends FormRequest
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
            'fullname' => 'required|string|max:100',
            'email' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
        ];
    }
}
