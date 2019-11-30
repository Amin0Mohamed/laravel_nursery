<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNurseriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurseries', function (Blueprint $table) {
            $table->bigIncrements('Nur_id');
            $table->string('Nur_name')->nullable();
            $table->string('Address')->nullable();
            $table->integer('Phone')->nullable();
            $table->text('Requirement')->nullable();
            $table->tinyInteger('Status')->nullable();
            $table->text('Desc')->nullable();
            $table->text('image1')->nullable();
            $table->text('imageT1')->nullable();
            $table->integer('ownerID')->nullable();

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
        Schema::dropIfExists('nurseries');
    }
}
