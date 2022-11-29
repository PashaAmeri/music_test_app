<?php

namespace App\Interfaces;

use App\Models\User;

interface OtpCodeRepositoryInterface 
{

    public function create(string $code, User $user);
}