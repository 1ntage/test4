<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm(){
        return view('auth.register');
    }

    public function register(Request $request){
       $validated = $request->validate([
           'name' => 'required|string|max:255',
           'email' => 'required|email|max:255|unique:users',
           'password' => 'required|string|max:255|min:7|confirmed'
       ]);

       $user = User::create([
           'name' => $validated['name'],
           'email' => $validated['email'],
           'password' => Hash::make($validated['password']),
       ]);

       Auth::login($user);

       return redirect('/')->with('success', 'Вы успешно зарегистрированы');
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'Вы успешно авторизовались');
        }

        return back()->withErrors([
            'email' => 'Неверный email или пароль.',
        ]);
    }

    public function logout (Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
