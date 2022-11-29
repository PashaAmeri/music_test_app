<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\OtpCodeRepository;
use App\Interfaces\OtpCodeRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;

class OtpService
{

    private OtpCodeRepositoryInterface $otpCode;

    public function __construct(OtpCodeRepository $otpCode)
    {
        
        $this->otpCode = $otpCode;
    }
    
    public function generateCode(Request $request)
    {

        try {
            
            $this->otpCode->create(randomString(6, 'numeric'), User::where('phone', $request->phone)->first());
        } catch (\Throwable $th) {
            
            return response([
                'message' => 'oops! Something went wrong.'
            ], Response::HTTP_CONFLICT);
        }

        return response([
            'message' => 'Code Generated.'
        ], Response::HTTP_CREATED);
    }

    public function ValidateCode(int $code, User $user)
    {
        
        //
    }
}
