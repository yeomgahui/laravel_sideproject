<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use App\Http\Requests\RegisterMemberRequest;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class MemberController extends Controller
{

    //로그인
    public function signIn(SignInRequest $request)
    {

        dd($request);
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
            //임시오류
            abort('회원가입과정에 문제가 생겼습니다.', 422);
        }
    }
    //회원등록 
    public function registerMember(RegisterMemberRequest $request)
    {
        $validated = $request->validate();
        $user = new User();
        $user->email = $validated['email'];
        $user->password = $validated['password'];
        $user->role = $validated['role'];
        $user->phone = $validated['phone'];
    }
}
