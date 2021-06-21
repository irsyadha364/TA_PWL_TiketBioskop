<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function signUp()
    {
        return view('auth.register');
    }

    public function logIn()
    {
        return view('signIn');
    }

    public function forgotPassword()
    {
        return view('forgotPassword');
    }
}
