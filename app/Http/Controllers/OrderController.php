<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

class OrderController extends Controller
{
    #[OA\Get(
        path: '/order/{id}',
        tags: ['Order'],
        parameters: [
            new OA\Parameter(
                name: 'id',
                description: 'Order id',
                required: true
            )
        ],
        summary: 'Get Order',
        responses: [
            new OA\Response(
                response: 200,
                description: 'Successfully operation.',
                content: new OA\JsonContent(
                    // TODO
                )
            )
        ]
    )]
    public function get(Request $request)
    {
        // 
        return 'hoge';
    }

    /**
     * Register order
     */
    public function register()
    {

    }

    /**
     * Cancel order
     */
    public function cancel()
    {

    }
}
