<?php

namespace App\Http\Requests\Admin\Landing\PractiveArea;

use Illuminate\Foundation\Http\FormRequest;

class AddPractiveAreaRequest extends FormRequest
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
            'image' => 'required|string|max:255',
            'title' => 'required|string|max:60',
            'content' => 'required|string|max:200',
            'description' => 'required|string|max:255',
            'landing_service_id' => 'required|integer',
        ];
    }
}
