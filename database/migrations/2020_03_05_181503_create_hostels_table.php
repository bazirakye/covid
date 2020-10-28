<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('custodian_id')->unsigned();
            $table->string('hostelName');
            $table->string('description');
            $table->timestamps();
            $table->foreign('custodian_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('hostels');
    }
}
