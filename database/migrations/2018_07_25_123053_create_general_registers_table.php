<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_registers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('product_state');
            $table->integer('quantity');
            $table->integer('seller_id');
            $table->integer('buyer_id');
            $table->dateTime('delivery_date');
            $table->dateTime('order_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_registers');
    }
}
