<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->double('seller_id')->unsigned();
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
            $table->string('type',15);
            $table->string('firstName');
            $table->string('lastName');
            $table->string('nameStore');
            $table->string('gender',15);
            $table->string('birthday',15);
            $table->string('nationalCode',15);
            $table->string('VAT',15);
            $table->integer('logo_id')->unsigned();
            $table->foreign('logo_id')->references('id')->on('logos')->onDelete('cascade');
            $table->text('description');
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
        Schema::dropIfExists('profiles');
    }
}
