<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login() 
    {
        return view('login');
    }

    public function signin(Request $request)
    {
        $dados = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($dados)) {
            if (Auth::user()->status === 1 && Auth::user()->role ==='admin') {
                $request->session()->regenerate();
                return redirect()->intended('admin/dashboard');
            } else if (Auth::user()->status === 1 && Auth::user()->role === 'common'){
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            } else {
                return redirect()->route('/')->with(['message' => 'Usuário inválido']);
            }
        }

        return back()->withErrors([
            'email' => 'O email e/ou senha não são inválidos'
        ]);
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
