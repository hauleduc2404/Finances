<?php

namespace App\Http\Requests\Admin\Landing\LoanCalculator;

use Illuminate\Foundation\Http\FormRequest;

class AddLoanCalculatorRequest extends FormRequest
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
            'interest_rate' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'landing_service_id' => 'required|integer',
        ];
    }
}
