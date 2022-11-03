<?php

namespace App\Models;

use Illuminate\Support\Facades\Date;
use OpenApi\Attributes as OA;

#[OA\Schema()]
class Receipt
{
    /** @var int $deliveryCharge */
    #[OA\Property(
        type: 'int',
        description: 'Delivery charge',
        example: 250
    )]
    private int $deliveryCharge;
    
    /** @var int $fee */
    #[OA\Property(
        type: 'int',
        description: 'Fee',
        example: 200
    )]
    private int $fee;

    /** @var int $discount */
    #[OA\Property(
        type: 'int',
        description: 'Discount',
        example: 538
    )]
    private int $discount;

    /** @var int $orderTotal */
    #[OA\Property(
        type: 'int',
        description: 'Order total',
        example: 3216
    )]
    private int $orderTotal;

    /** @var int $billingAmount */
    #[OA\Property(
        type: 'int',
        description: 'Billing Amount',
        example: 3088
    )]
    private int $billingAmount;

    public function __construct(
        int $deliveryCharge,
        int $fee,
        int $discount,
        int $orderTotal,
        int $billingAmount,
    )
    {
        
    }
}
