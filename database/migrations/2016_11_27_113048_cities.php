<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cities extends Migration
{
    public static function orderBy($string)
    {
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cities');
            $table->integer('id_countrys')->unsigned();
            $table->integer('id_continents')->unsigned();
            $table->timestamps();
        });
        Schema::table('cities', function (Blueprint $table) {
            $table->foreign('id_countrys')
                ->references('id')
                ->on('countrys');
        });
        Schema::table('cities', function (Blueprint $table) {
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
        Schema::drop('cities');
    }
}
