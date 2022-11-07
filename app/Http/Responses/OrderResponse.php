<?php

namespace App\Http\Responses;

use App\Models\Address;
use App\Models\DeliveryAddress;
use App\Models\Receipt;
use OpenApi\Attributes as OA;
use OpenApi\Attributes\Items;

#[OA\Schema()]
class OrderResponse
{
  private int $id;

  /** @var string $orderId */
  #[OA\Property(
    type: 'string',
    description: 'Order id',
    example: '12345678'
  )]
  private string $orderId;

  /** @var DeliveryAddress $deliveryAddress */
  #[OA\Property(
    type: 'DeliveryAddress',
    description: 'Delivery address',
    ref: '#/components/schemas/DeliveryAddress'
  )]
  private DeliveryAddress $deliveryAddress;

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
    string $orderId,
    DeliveryAddress $deliveryAddress,
    array $orderDetails,
    Receipt $receipt
  )
  {
    
  }

  public function getOrder(): self
  {
    return $this;
  }
}
