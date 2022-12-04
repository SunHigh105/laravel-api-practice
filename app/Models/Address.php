<?php

namespace App\Models;

use OpenApi\Attributes as OA;

#[OA\Schema()]
class Address
{
    private readonly int $id;
    private readonly string $userId;

    /** @var string $postCode */
    private readonly string $postCode;

    /** @var string $address */
    private readonly string $address;
    
    public function __construct(
        int $id,
        string $userId,
        string $postCode,
        string $address
    )
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->postCode = $postCode;
        $this->address = $address;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getPostCode(): string
    {
        return $this->postCode;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

}
