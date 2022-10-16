<?php

namespace App\Http\Controllers;

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
    #[OpenApi\Operation]
    public function get(Request $request)
    {
        // 
        return 'hoge';
    }
}
