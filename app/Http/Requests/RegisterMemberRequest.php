<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //이름, 아이디, 비밀번호, 전화번호, ()
        return [
            'name' => 'required',
            'id' => 'required',
            'password' => 'required|regex:/^(?!.*[\s])(?=.*[!@#$%^&*-])(?=.*\w).{8,15}$/',
            'password_confirm' => 'required|same:password',
            'role' => 'required|int',
            'phone' => 'nullable'
        ];
    }
}
