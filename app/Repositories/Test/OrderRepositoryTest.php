<?php

namespace App\Repositories\Test;

use App\Models\Order;
use App\Repositories\OrderRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderRepositoryTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_can_get_order_by_order_id()
    {
        setup:
        $this->refreshDatabase();
        $this->seed();

        $repository = new OrderRepository();
        
        when:
        $actual = $repository->getOrderById('0000000001');

        then:
        $this->assertEquals('0000000001', $actual->order_id);
    }
}
