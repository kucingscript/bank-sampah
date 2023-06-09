<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

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

            return redirect()->intended('/information');
        }
        return back()->withErrors(['email' => '*Username or password is wrong'])->onlyInput('email');
    }

    public function register(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'min:5'],
            'username' => ['required', 'min:3', 'unique:users,username'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6']
        ]);

        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect()->intended('/email/verify');
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
