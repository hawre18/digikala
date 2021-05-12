<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->double('seller_id')->unsigned();
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
            $table->string('email');
            $table->string('tellPhone',15);
            $table->string('cellPhone',15);
            $table->string('website')->nullable();
            $table->integer('province_id',15);
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->integer('city_id',15);
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->text('address');
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
        Schema::dropIfExists('addresses');
    }
}
