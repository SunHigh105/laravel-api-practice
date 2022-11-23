<?php

namespace App\Repositories;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface 
{
    public function getOrderById(string $orderId)
    {
        return Order::where('order_id', $orderId)->first();
    }
}
