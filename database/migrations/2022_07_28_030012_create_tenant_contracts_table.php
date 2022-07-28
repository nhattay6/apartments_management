<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant_contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apartment_room_id');
            $table->unsignedBigInteger('tenant_id');
            $table->integer('pay_period');
            $table->bigInteger('price');
            $table->integer('electricity_pay_type');
            $table->bigInteger('electricity_price');
            $table->integer('electricity_number_start');
            $table->integer('water_pay_type');
            $table->bigInteger('water_price');
            $table->integer('water_number_start');
            $table->integer('number_of_tenant_current');
            $table->text('note');
            $table->dateTime('start_date');
            $table->dateTime('end_date');

            //FRK
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
        Schema::dropIfExists('tenant_contracts');
    }
}
