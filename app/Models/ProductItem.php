<?php

namespace App\Models;

use OpenApi\Attributes as OA;

#[OA\Schema()]
class ProductItem
{
    /** @var string $name */
    #[OA\Property(
        property: 'name',
        type: 'string',
        description: 'Product name',
        example: 'iPhone 13'
    )]
    private readonly string $name;

    /** @var int $count */
    #[OA\Property(
        property: 'count',
        type: 'int',
        description: 'Product count',
        example: 1
    )]
    private readonly int $count;
    
    /** @var int $price */
    #[OA\Property(
        property: 'price',
        type: 'int',
        description: 'Product price',
        example: 87000
    )]
    private readonly int $price;
    
    public function __construct(
        string $name,
        int $count,
        int $price
    )
    {
        
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}
