<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutboundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outbounds', function (Blueprint $table) {
            $table->BigIncrements('outbound_id');
            $table->unsignedBigInteger('warehouse_id');
            $table->integer('vehicle_id');
            $table->integer('product_id');
            $table->string('out_date');
            $table->string('address');
            $table->integer('quantity_out');
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
        Schema::dropIfExists('outbounds');
    }
}
