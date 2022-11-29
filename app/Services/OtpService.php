<?php

namespace App\Services;

use App\Models\User;
use App\Interfaces\OtpCodeRepositoryInterface;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OtpService
{

    private OtpCodeRepositoryInterface $otpCode;

    public function __construct(OtpCodeRepositoryInterface $otpCode)
    {
        
        $this->otpCode = $otpCode;
    }
    
    public function generateCode(Request $request)
    {

        $this->otpCode->create(randomString(6, 'numeric'), User::where('phone', $request->only('phone')));
        
        return response([
            'message' => 'Code Generated.'
        ], Response::HTTP_CREATED);
    }

    public function ValidateCode(int $code, User $user)
    {
        
        //
    }
}
