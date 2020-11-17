<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('student_id')->unsigned();
            $table->string('student_name');
            $table->string('student_phone');
            $table->string('student_email');
            $table->bigInteger('hostel_id')->unsigned();
            $table->string('hostel_name');
            $table->bigInteger('room_id')->unsigned();
            $table->string('room_no');
            $table->integer('paid_booking_price');
            $table->integer('balance');
            $table->timestamps();

             $table->foreign('hostel_id')->references('id')->on('hostels')

        ->onDelete('cascade');
             $table->foreign('room_id')->references('id')->on('rooms')

        ->onDelete('cascade');
             $table->foreign('student_id')->references('id')->on('users')

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
        Schema::dropIfExists('bookings');
    }
}
