<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $url = "";
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if ($request->user()->role === "admin") {
                $url = "admin/index";
            } else {
                $url = "/";
            }
        }
        return redirect()->intended($url);
    }

    public function register()
    {
        return view('register');
    }

    public function registerCreate() {}

    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
