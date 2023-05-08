<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('register');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
        return back()->withErrors(['email' => 'The provided credentials do not match our records.'])->onlyInput('email');
    }

    public function register(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'min:5'],
            'username' => ['required', 'min:5', 'unique:users,username'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:9']
        ]); 

        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->save();

        return redirect()->intended('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    public function test()
    {
        echo auth::user()->name;
        echo auth::user()->username;
        echo auth::user()->email;
    }
}
