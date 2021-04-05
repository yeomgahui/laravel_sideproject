<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            // 'password' => 'required',
            // 'repassword' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'email is required',
        ];
    }
}
