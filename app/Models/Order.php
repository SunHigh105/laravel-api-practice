<?php

namespace App\Models;

use App\Models\Address;
use OpenApi\Attributes as OA;
use OpenApi\Attributes\Items;

#[OA\Schema()]
class Order
{
  private int $id;

  /** @var string $orderId */
  #[OA\Property(
    type: 'string',
    description: 'Order id',
    example: '12345678'
  )]
  private string $orderId;

  /** @var User $user */
  #[OA\Property(
    type: 'User',
    description: 'address',
    ref: '#/components/schemas/User'
  )]
  private User $user;

  /** @var Address $address */
  #[OA\Property(
    type: 'Address',
    description: 'address',
    ref: '#/components/schemas/Address'
  )]
  private Address $address;

  /** @var array $orderDetails */
  #[OA\Property(
    type: 'array',
    description: 'Order details',
    items: new Items(
      ref: '#/components/schemas/OrderDetail',
    )
  )]
  public array $orderDetails;

  /** @var array $orderDetails */
  #[OA\Property(
    type: 'Receipt',
    description: 'Order receipt',
    ref: '#/components/schemas/Receipt',
  )]
  public Receipt $receipt;

  public function __construct(
    string $id,
    Address $address,
    array $orderDetails
  )
  {
    
  }

  public function getOrder(): self
  {
    return $this;
  }
}
