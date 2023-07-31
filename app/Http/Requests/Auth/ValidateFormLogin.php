<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormLogin extends FormRequest
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
     * @return array<string, mixed>
     */
     public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Tên đăng nhập không được để trống',
            'email.email' => 'Phải nhập đúng định dạng email',
            'password.required' => 'mật khẩu không được để trống',
        ];
    }
}