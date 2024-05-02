<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        return view('login');
    }

    public function manageUser(){

        $users = User::all();
        return view('dashboard.setting', compact('users'));
    }

    public function authenticate(Request $request){

        $credentials = $request->validate([
            'username' => ['required', 'min:3', 'max:255'],
            'password' => ['required', 'min:3', 'max:255'],
        ]);
        
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            }

            return back()->with('loginError',  'Login Failed');
    }



    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/home');
    }
}
