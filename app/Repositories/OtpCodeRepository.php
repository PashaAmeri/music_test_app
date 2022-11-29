<?php

namespace App\Repositories;

use App\Interfaces\OtpCodeRepositoryInterface;
use App\Models\OtpCode;
use App\Models\User;

class OtpCodeRepository implements OtpCodeRepositoryInterface
{

    public function create(string $code, User $user)
    {
        
        return OtpCode::create([
            'code' => $code,
            'user' => $user->id
        ]);
    }
}