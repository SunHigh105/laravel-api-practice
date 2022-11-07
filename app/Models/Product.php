<?php

namespace App\Models;

use OpenApi\Attributes as OA;

#[OA\Schema()]
class Product
{
    /** @var string $name */
    #[OA\Property(
        property: 'name',
        type: 'string',
        description: 'Product name',
        example: 'iPhone 13'
    )]
    private readonly string $name;

    /** @var string $description */
    #[OA\Property(
        property: 'description',
        type: 'string',
        description: 'Product desctiption',
        example: 1
    )]
    private readonly string $description;
    
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
        string $description,
        int $count,
    )
    {
        
    }

    public function getProduct(): self
    {
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDesctiption(): int
    {
        return $this->description;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}
