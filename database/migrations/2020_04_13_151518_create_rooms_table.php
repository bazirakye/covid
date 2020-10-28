<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('hostel_id')->unsigned();
            $table->string('room_no');
            $table->string('room_type');
            $table->integer('price');
            $table->integer('booking_price');
            $table->string('image');
            $table->string('status')->default('on');
            $table->string('description');
            $table->timestamps();

            $table->foreign('hostel_id')->references('id')->on('hostels')

        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}