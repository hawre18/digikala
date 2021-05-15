<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminsProfile', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('sellers')->onDelete('cascade');
            $table->string('type',15);
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender',15);
            $table->string('birthday',15);
            $table->string('nationalCode',15);
            $table->integer('picture_id')->unsigned();
            $table->foreign('picture_id')->references('id')->on('pictures')->onDelete('cascade');
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
        Schema::dropIfExists('adminsProfile');
    }
}
