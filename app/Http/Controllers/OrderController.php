<?php

namespace App\Http\Controllers;

use App\OpenApi\Parameters\GetOrderParameters;
use App\OpenApi\Responses\OrderResponse;
use Illuminate\Http\Request;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

#[OpenApi\PathItem]
class OrderController extends Controller
{
    /**
     * @OA\Get(
     *     path="/order",
     *     tags={"order"},
     *     summary="Get Order",
     *     description="Return order.",
     *     operationId="getOrder",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation"
     *     ),
     * )
     */
    #[OpenApi\Operation(method: 'GET')]
    #[OpenApi\Parameters(factory: GetOrderParameters::class)]
    #[OpenApi\Response(factory: OrderResponse::class)]
    public function get(Request $request)
    {
        // 
        return 'hoge';
    }
}
