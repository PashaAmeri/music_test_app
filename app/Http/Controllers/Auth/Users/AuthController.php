<?php

namespace App\Http\Controllers\Auth\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    
    public function register(Request $request)
    {
        
        User::create($request->only('phone', 'password'));
    }

    public function login(Request $request)
    {
        
        //
    }

    public function logout()
    {
        
        //
    }
}
