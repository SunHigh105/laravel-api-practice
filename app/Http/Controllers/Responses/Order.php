<?php

namespace App\Http\Controllers\Responses;

use App\Models\ProductItem;
use OpenApi\Attributes as OA;
use OpenApi\Attributes\Items;

#[OA\Schema()]
class Order
{
  /** @var string $id */
  #[OA\Property(
    type: 'string',
    description: 'Order id',
    example: '12345678'
  )]
  public string $id;

  /** @var array $products */
  #[OA\Property(
    type: 'array',
    description: 'Product list',
    items: new Items(
      ref: '#/components/schemas/ProductItem',
    )
  )]
  public array $products;

  public function __construct(
    string $id,
    array $products
  )
  {
    
  }

  public function getId(): string
  {
    return $this->id;
  }

  public function getProducts(): array
  {
    return $this->products;
  }
}
