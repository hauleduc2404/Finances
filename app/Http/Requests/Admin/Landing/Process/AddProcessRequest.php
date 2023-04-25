<?php

namespace App\Http\Requests\Admin\Landing\Process;

use Illuminate\Foundation\Http\FormRequest;

class AddProcessRequest extends FormRequest
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
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:60',
            'content' => 'required|string|max:200',
            'landing_service_id' => 'required|integer',
        ];
    }
}
