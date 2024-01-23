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
        Schema::create('booked_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->string('customer_id');
            $table->string('quantity_ac');
            $table->string('booking_date_ac');
            $table->string('leaving_date_ac');
            $table->string('total_amount_ac');
            $table->string('quantity_non_ac');
            $table->string('booking_date_non_ac');
            $table->string('leaving_date_non_ac');
            $table->string('total_amount_non_ac');
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
        Schema::dropIfExists('booked_rooms');
    }
};
