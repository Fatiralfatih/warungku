<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login()
    {
        return  view('auth.login');
    }

    public function auth(LoginRequest $request)
    {
        $credentials = $request->safe()->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role == 'pelayan') {
                return redirect()->intended('/');
            }else{
                return redirect()->intended('menu');
            }
        }

        return back()->withErrors([
            'email' => 'Email Salah!!',
            'password' => 'Pasword salah!!'
        ]);
    }

    function logout(Request $request)
    {

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return Redirect()->route('menu')->with('success', 'Berhasil logout');
    }
}
