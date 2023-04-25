<?php

namespace App\Http\Requests\Admin\Landing\LoanAdviser;

use Illuminate\Foundation\Http\FormRequest;

class AddLoanAdviserRequest extends FormRequest
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
            'title' => 'required|string|max:60',
            'description' => 'required|string|max:255',
            'content' => 'required|string|max:200',
            'address' => 'required|string|max:255',
            'email' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
        ];
    }
}
