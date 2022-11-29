<?php

namespace App\Repositories;

use App\Interfaces\OtpCodeRepositoryInterface;
use App\Models\OtpCode;
use App\Models\User;
use Carbon\Carbon;

class OtpCodeRepository implements OtpCodeRepositoryInterface
{

    public function create(string $code, User $user)
    {
        
        return OtpCode::create([
            'user_id' => $user->id,
            'code' => $code,
            'expires_at' => Carbon::now()->addMinutes(2)->timestamp
        ]);
    }
}