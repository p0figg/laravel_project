<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        $ip = $request->ip();
        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->boolean('remember');
        dd($ip, $email, $password, $remember);
        return "Хранение логина";
    }
}
