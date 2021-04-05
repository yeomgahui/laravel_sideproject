<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;

class MemberController extends Controller
{
    //

    //로그인
    public function signIn(Request $request)
    {
        dd('test');
    }

    //회원가입
    /**
     * Store a new user
     */
    public function signUp(SignUpRequest $request)
    {
        dd('유효성검사 성공');
    }
}
