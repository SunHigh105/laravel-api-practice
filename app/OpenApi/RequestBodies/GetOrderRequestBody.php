<?php

namespace App\OpenApi\RequestBodies;

use App\OpenApi\Schemas\OrderSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\RequestBody;
use Vyuldashev\LaravelOpenApi\Factories\RequestBodyFactory;

class GetOrderRequestBody extends RequestBodyFactory
{
    public function build(): RequestBody
    {
        return RequestBody::create('GetOrder')
            ->description('Get order by order id')
            ->content(
                MediaType::json()->schema(OrderSchema::ref())
            );
    }
}
