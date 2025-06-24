<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request) 
    {
        // validate() "sanitize" les données avant traitement
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        if (\Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'Cet email ne correspond à aucun email connu',
        ])->onlyInput('email');
    }

}
