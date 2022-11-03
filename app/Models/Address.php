<?php

namespace App\Models;

use OpenApi\Attributes as OA;

#[OA\Schema()]
class Address
{
    private int $id;
    private string $userId;

    /** @var string $postCode */
    #[OA\Property(
        property: 'postCode',
        type: 'string',
        description: 'Post code',
        example: '123-4567'
    )]
    private readonly string $postCode;

    /** @var string $address */
    #[OA\Property(
        property: 'address',
        type: 'string',
        description: 'address',
        example: '東京都ほげほげ区ふがふが'
    )]
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
