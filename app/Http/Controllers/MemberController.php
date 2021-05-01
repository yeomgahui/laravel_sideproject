<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class MemberController extends Controller
{

    //로그인
    public function signIn(SignInRequest $request)
    {
        dd($request);
        dd('test');
    }

    //회원가입
    /**
     * Store a new user
     */
    public function signUp(SignUpRequest $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = Crypt::encryptString($request->password);
        $result = $user->save();


        if ($result) {
            //로그인 실행 

        } else {
            abort('회원가입과정에 문제가 생겼습니다.', 422);
        }
    }
}
