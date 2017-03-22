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
            $table->integer('id_continents')->unsigned();
            $table->timestamps();
        });

        Schema::table('countrys', function (Blueprint $table) {
            $table->foreign('id_continents')
                ->references('id')
                ->on('continents');
        });
    }


    public function down()
    {
        Schema::drop('countrys');
    }
}
