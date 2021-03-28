<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function signIn($user){
        dd('test');

        return "아이디".$user;
    }
}
