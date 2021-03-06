<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function registerForm()
    {
        if (!Auth::user()) {
            return Inertia::render('public/registerForm');
        }
        return Redirect::route('admin.index');
    }

    public function loginForm()
    {
        if (!Auth::user()) {
            return Inertia::render('public/loginForm');
        }
        return Redirect::route('admin.index');
    }

    public function register(RegisterRequest $request)
    {
        if ($user = User::create($request->validated())) {
            Auth::login($user);
            return Redirect::route('admin.index');
        }
        return Redirect::back()->withErrors(['errors'=> 'error to create  user.']);
    }

    public function login(LoginRequest $request)
    {
        if(Auth::attempt($request->validated())){
            return Redirect::route('admin.index');
        }
        return Redirect::back()->withErrors(['credentials'=> 'wrong credentials.']);
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::route('home');
    }
}
