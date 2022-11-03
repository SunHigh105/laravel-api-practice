<?php

namespace App\Models;

use App\Models\Address;
use OpenApi\Attributes as OA;

#[OA\Schema()]
class OrderDetail
{
  private int $id;
  private string $orderNo;

  /** @var Product $product */
  #[OA\Property(
    type: 'Product',
    description: 'Orderd product',
    ref: '#/components/schemas/Product'
  )]
  private Product $product;

  #[OA\Property(
    type: 'int',
    description: 'Orderd product count',
    example: 1
  )]
  private int $count;

  public function __construct(
    string $id,
    Address $address,
    array $products
  )
  {
    
  }

  public function getOrderDetail() {
    return $this;
  }
}
