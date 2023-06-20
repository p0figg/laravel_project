<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $user_agreement = $request->boolean('user-agreement');
        dd($email, $password, $user_agreement);
        return "Хранение регистрации";
    }
}
