<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface 
{
    public function getUserById(string $userId)
    {
        return User::where('user_id', $userId)->first();
    }
}
