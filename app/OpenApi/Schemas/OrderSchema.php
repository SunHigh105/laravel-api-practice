<?php

namespace App\OpenApi\Schemas;

use GoldSpecDigital\ObjectOrientedOAS\Contracts\SchemaContract;
use GoldSpecDigital\ObjectOrientedOAS\Objects\AllOf;
use GoldSpecDigital\ObjectOrientedOAS\Objects\AnyOf;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Not;
use GoldSpecDigital\ObjectOrientedOAS\Objects\OneOf;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\SchemaFactory;
use Vyuldashev\LaravelOpenApi\Contracts\Reusable;

class OrderSchema extends SchemaFactory implements Reusable
{
    /**
     * @return AllOf|OneOf|AnyOf|Not|Schema
     */
    public function build(): SchemaContract
    {
        return Schema::object('Order')
            ->properties(
                Schema::string('id')
                    ->description('Order id')
                    ->example('1'),
                Schema::string('code')
                    ->description('Order code')
                    ->example('0000001'),
                Schema::string('date')
                    ->description('Order date (yyyymmdd hhmmss)')
                    ->example('20221018 222630'),
                Schema::array('products')->items(
                    Schema::object()
                        ->properties(
                            Schema::string('name')
                                ->description('Product name')
                                ->example('iPad Air 64GB'),
                            Schema::integer('count')
                                ->description('Product count')
                                ->example(1),
                            Schema::integer('price')
                                ->description('Product price')
                                ->example(45000)
                        )
                )
            );
    }
}
