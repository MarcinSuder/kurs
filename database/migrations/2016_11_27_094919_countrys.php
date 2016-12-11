<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Countrys extends Migration
{

    public function up()
    {
        Schema::create('countrys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('countrys');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('countrys');
    }
}
