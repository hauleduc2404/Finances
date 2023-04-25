<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'phone' => 'required|string|unique:users,phone|min:10',
            'password' => 'required|string|min:6'
        ];
    }

    public function messages()
    {
        return [
            'phone.unique' => 'Số điện thoại này đã được đăng ký',
            'phone.min' => 'Số điện thoại không hợp lệ',
            'passwor.min' => 'Mật khẩu tối tiểu 6 ký tự'
        ];
    }
}
