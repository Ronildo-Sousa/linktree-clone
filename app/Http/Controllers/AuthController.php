<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Repositories\AuthRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class AuthController extends Controller
{
    private $repository;

    public function __construct(AuthRepository $repository)
    {
        $this->repository = $repository;
    }

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
        $callback = $this->repository->store($request->validated());
        if ($callback === true) {
            return Redirect::route('admin.index');
        }
        return Redirect::back()->withErrors(['errors'=> 'error to create  user.']);
    }

    public function login(LoginRequest $request)
    {
        if($this->repository->auth($request->validated())){
            return Redirect::route('admin.index');
        }
        return Redirect::back()->withErrors(['credentials'=> 'wrong credentials.']);
    }
}
