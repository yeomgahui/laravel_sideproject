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
            'email' => 'required|email|unique:users',
            'password' => 'required|regex:/^(?!.*[\s])(?=.*[!@#$%^&*-])(?=.*\w).{8,15}$/|min:8',
            'password_confirm' => 'required|same:password',
        ];
    }
}
