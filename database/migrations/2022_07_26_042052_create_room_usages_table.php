<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomUsagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_usages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apartment_room_id');
            $table->integer('water_usage_number');
            $table->integer('electricity_usage_number');
            $table->dateTime('input_date');

            //FRK
            $table->foreign('apartment_room_id')->references('id')->on('apartment_rooms')->onDelete('cascade');
            
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
        Schema::dropIfExists('room_usages');
    }
}
