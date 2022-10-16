<?php

namespace App\Http\Controllers;

use App\OpenApi\RequestBodies\GetOrderRequestBody;
use App\OpenApi\Responses\OrderResponse;
use Illuminate\Http\Request;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

#[OpenApi\PathItem]
class OrderController extends Controller
{
    /**
     * Get order
     * 
     * Return order
     */
    #[OpenApi\Operation(method: 'GET')]
    #[OpenApi\RequestBody(factory: GetOrderRequestBody::class)]
    #[OpenApi\Response(factory: OrderResponse::class)]
    public function get(Request $request)
    {
        // 
        return 'hoge';
    }
}
