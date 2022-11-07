<?php

namespace App\Models;

use OpenApi\Attributes as OA;

#[OA\Schema()]
class Address
{
    private int $id;
    private string $userId;

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
        
    }

    public function getAddress(): self
    {
        return $this;
    }
}
