<?php

namespace App\Services;

use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class OtpService
{
    
    public function generateCode(User $user)
    {

        
        
        return response([
            'message' => 'Code Generated.'
        ], Response::HTTP_CREATED);
    }

    public function ValidateCode(int $code, User $user)
    {
        
        //
    }
}
