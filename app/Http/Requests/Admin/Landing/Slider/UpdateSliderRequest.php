<?php

namespace App\Http\Requests\Admin\Landing\Slider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSliderRequest extends FormRequest
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
            'id' => 'required|integer',
            'title' => 'required|max:60',
            'content' => 'required|max:200',
            'link' => 'required|max:255',
        ];
    }
}
