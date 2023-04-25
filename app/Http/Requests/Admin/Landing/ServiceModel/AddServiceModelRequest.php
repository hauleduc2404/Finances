<?php

namespace App\Http\Requests\Admin\Landing\ServiceModel;

use Illuminate\Foundation\Http\FormRequest;

class AddServiceModelRequest extends FormRequest
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
            'title' => 'required|max:60',
            'description' => 'required|max:200',
            'display_order' => 'integer',
            'service_type' => 'integer',
        ];
    }
}
