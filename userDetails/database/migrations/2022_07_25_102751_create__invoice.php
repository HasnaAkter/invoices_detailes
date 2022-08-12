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
        Schema::create('_invoice', function (Blueprint $table) {
            $table->id();
            $table->string('Patient');
            $table->string('Referred_by');
            $table->date('Bill_date');
            $table->date('Delivery_date');
            $table->time('Delivery_time');
            $table->string('Remarks');
            $table->string('Sub_total');
            $table->string('Tax');
            $table->string('Discount');
            $table->string('Net_Payable');
            $table->string('Received_Ammount');
            $table->string('Pay_Via');
            $table->string('Remarks2');
            




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
        Schema::dropIfExists('_invoice');
    }
};
