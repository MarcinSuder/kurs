<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Airports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('airports');
            $table->string('description');
            $table->string('foto');
            $table->integer('id_cities')->unsigned();
            $table->integer('id_countrys')->unsigned();
            $table->integer('id_continents')->unsigned();
            $table->timestamps();
        });
        Schema::table('airports', function (Blueprint $table) {
        $table->foreign('id_cities')
            ->references('id')
            ->on('cities');


            $table->foreign('id_countrys')
            ->references('id')
            ->on('countrys');

            $table->foreign('id_continents')
                ->references('id')
                ->on('continents');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('airports');
    }
}
