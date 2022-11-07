<?php

namespace App\Models;

use OpenApi\Attributes as OA;

#[OA\Schema()]
class DeliveryAddress
{
    /** @var string $userName */
    #[OA\Property(
      type: 'string',
      description: 'User name',
      example: 'ダミー 太郎'
    )]
    private string $userName;

    /** @var string $postCode */
    #[OA\Property(
      property: 'postCode',
      type: 'string',
      description: 'Post code',
      example: '123-4567'
    )]
    private string $postCode;

    /** @var string $address */
    #[OA\Property(
      property: 'address',
      type: 'string',
      description: 'address',
    )]
    private string $address;
    
    public function __construct(
        string $userName,
        string $postCode,
        string $address
    )
    {
        
    }

    public function getDeliveryAddress(): self
    {
        return $this;
    }
}
