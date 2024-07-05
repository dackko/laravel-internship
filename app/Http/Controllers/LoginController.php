<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');


        $user = Auth::attempt([
            'email' => $email,
            'password' => $password
        ]);

        if($user === true) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back();
    }

    public function showLogin()
    {
        if(Auth::check() === true) {
            return redirect()->route('admin.dashboard');
        }

        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
