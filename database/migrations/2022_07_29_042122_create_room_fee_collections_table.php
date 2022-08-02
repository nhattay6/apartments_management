<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomFeeCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_fee_collections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tenant_contract_id');
            $table->unsignedBigInteger('apartment_room_id');
            $table->unsignedBigInteger('tenant_id');
            $table->integer('electricity_number_before');
            $table->integer('electricity_number_after');
            $table->integer('water_number_before');
            $table->integer('water_number_after');
            // $table->integer('tenant_contract_id')->unsigned()->index();
            $table->dateTime('change_date');
            $table->bigInteger('total_debt');
            $table->bigInteger('total_price');
            $table->bigInteger('total_paid');
            $table->string('fee_collection_uuid');

            //FRK
            $table->foreign('tenant_contract_id')->references('id')->on('tenant_contracts')->onDelete('cascade');
            $table->foreign('apartment_room_id')->references('id')->on('apartment_rooms')->onDelete('cascade');
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');

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
        Schema::dropIfExists('room_fee_collections');
    }
}
