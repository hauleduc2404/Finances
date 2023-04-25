<?php

namespace App\Http\Requests\Admin\Landing;

use Illuminate\Foundation\Http\FormRequest;

class AddIntroRequest extends FormRequest
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
            'content' => 'required|max:200',
            'link' => 'required|max:255',
        ];
    }
}
