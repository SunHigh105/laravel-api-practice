<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('user_id');
            $table->string('address_id');
            $table->integer('delivery_charge');
            $table->integer('fee');
            $table->integer('discount');
            $table->date('order_date');
            $table->date('arrival_date');
            $table->string('status');
            $table->timestamps();

            $table->unique('order_id', 'uk_orders');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('address_id')->references('address_id')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
