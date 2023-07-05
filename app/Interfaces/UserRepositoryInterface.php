<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function getUserById(string $userId);
}
