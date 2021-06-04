<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInboundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inbounds', function (Blueprint $table) {
            $table->BigIncrements('inbound_id');
            $table->unsignedBigInteger('warehouse_id');
            $table->integer('delivery_id');
            $table->integer('product_id');
            $table->string('in_date');
            $table->integer('quantity_in');
            $table->timestamps();

            $table->foreign('warehouse_id')->references('warehouse_id')->on('warehouses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inbounds');
    }
}
