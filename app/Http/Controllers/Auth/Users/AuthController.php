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
            'phone' => $request->phone
        ]);

        // TODO: change http://127.0.0.1:8080/api/service/sendCode to route('services.otp.generate')
        return $response = Http::post('http://127.0.0.1:8080/api/service/otp/sendCode',[
            'phone' => $request->phone
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
