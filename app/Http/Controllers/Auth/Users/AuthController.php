<?php

namespace App\Http\Controllers\Auth\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    
    public function register(Request $request)
    {
        
        User::create([
            'role' => ROLE_USER,
            'phone' => $request->only('phone')
        ]);

        // return $response = (new \GuzzleHttp\Client)->post(route('services.otp.generate'), [
        //     'phone' => $request->only('phone')
        // ]);

        return $response = Http::post(route('services.otp.generate'),[
            'phone' => $request->only('phone')
        ]);
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
