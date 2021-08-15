<?php

namespace App\Repositories;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class AuthRepository
{
    public function store(array $payload)
    {
        try {
            $payload['password'] = bcrypt($payload['password']);
            $user = User::create($payload);

            Auth::login($user);
            return true;
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function auth(array $credentials)
    {
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $credentials['email'])->first();
             Auth::login($user);
            return true;
        }
        return false;
    }
}
