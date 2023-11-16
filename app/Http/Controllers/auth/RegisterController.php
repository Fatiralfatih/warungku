<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreRegisterRequest;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    function register()
    {
        return view('auth.register');
    }

    function store(StoreRegisterRequest $request)
    {
        $data = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        event(new Registered($data));
        
        Auth::login($data);

        return redirect()->route('home')->with('success', 'Daftar Berhasil');
    }
}
