<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function authentikasi(Request $request)
    {
        $kredensial = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('loginError', 'Login Gagal !');
    }

    public function loginout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' =>  'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        // $request->session()->flash('success','Registration successfull! Please Login');
        return redirect('/login')->with('success', 'Registration successfull! Please Login');
    }
}