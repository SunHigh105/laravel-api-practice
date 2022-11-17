<?php

namespace App\Interfaces;

interface OrderRepositoryInterface
{
    public function getOrderById(string $orderId);
}
