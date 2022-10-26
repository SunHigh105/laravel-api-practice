<?php

namespace App\Http\Controllers\Responses;

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
      properties: [
        new OA\Property(
          property: 'name',
          type: 'string',
          description: 'Product name',
          example: 'iPhone 13'
        ),
        new OA\Property(
          property: 'count',
          type: 'int',
          description: 'Product count',
          example: 1
        ),
        new OA\Property(
          property: 'price',
          type: 'int',
          description: 'Product price',
          example: 87000
        )
      ]  
    )
  )]
  public array $products;
}
