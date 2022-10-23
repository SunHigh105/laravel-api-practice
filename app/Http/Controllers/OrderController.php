<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     *         description="successful operation."
     *     ),
     * )
     */
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
