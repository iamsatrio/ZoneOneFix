<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->unsignedInteger('transaction_id');
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->char('province_id',2);
//            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->char('regency_id',4);
//            $table->foreign('regency_id')->references('id')->on('regencies')->onDelete('cascade');
            $table->char('district_id',7);
//            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->char('village_id',10);
//            $table->foreign('village_id')->references('id')->on('villages')->onDelete('cascade');
            $table->string('zipcode');
            $table->string('shipping_method');
            $table->integer('shipping_cost');
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
        Schema::dropIfExists('shipments');
    }
}
