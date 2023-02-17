<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function register_view()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:8|confirmed'
        ]);

//dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);

        if(Auth::attempt($request->only('email','password')))
            {
                return redirect('/home');
            }
        return redirect ('/register')->withErrors('Error');

    }

    public function login(Request $request)
    {
//        dd($request->all());

        if(Auth::attempt($request->only('email','password')))
        {
            return redirect('/home');

        }
        return redirect('/login')->withErrors(['credentials'=>'Not Valid Cerenditals']);

    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect('/');
    }

    public function home()
    {
        return view('/auth.home');
    }
}
