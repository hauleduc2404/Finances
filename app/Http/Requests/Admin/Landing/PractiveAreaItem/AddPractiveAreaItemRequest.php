<?php

namespace App\Http\Requests\Admin\Landing\PractiveAreaItem;

use Illuminate\Foundation\Http\FormRequest;

class AddPractiveAreaItemRequest extends FormRequest
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
            'landing_practive_area_id' => 'required|integer',
        ];
    }
}
