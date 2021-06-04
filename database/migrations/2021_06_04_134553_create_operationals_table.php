<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operationals', function (Blueprint $table) {
            $table->BigIncrements('operational_id');
            $table->unsignedBigInteger('maintenance_id');
            $table->unsignedBigInteger('inbound_id');
            $table->unsignedBigInteger('outbound_id');
            $table->integer('expense_id');
            $table->string('date');
            $table->timestamps();

            $table->foreign('maintenance_id')->references('maintenance_id')->on('maintenances');
            $table->foreign('inbound_id')->references('inbound_id')->on('inbounds');
            $table->foreign('outbound_id')->references('outbound_id')->on('outbounds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operationals');
    }
}
