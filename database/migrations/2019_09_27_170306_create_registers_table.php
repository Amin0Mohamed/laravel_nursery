<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('rid');
            $table->string('sName')->nullable();
            $table->integer('sAge')->nullable();
            $table->string('sNationality')->nullable();
            $table->string('fName')->nullable();
            $table->string('fWork')->nullable();
            $table->string('fMobile')->nullable();
            $table->string('mName')->nullable();
            $table->string('mWork')->nullable();
            $table->string('mMobile')->nullable();
            $table->string('nName')->nullable();
            $table->string('nMobile')->nullable();
            $table->string('Address')->nullable();
            $table->integer('Status')->nullable(); //0: new,1: accepted,2: rejected.
            $table->date('rDate');  //Register date
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
        Schema::dropIfExists('registers');
    }
}
