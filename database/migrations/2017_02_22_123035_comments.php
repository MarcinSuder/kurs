<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comments extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('comments')) {
            Schema::create('comments', function (Blueprint $table) {
                $table->increments('id');
                $table->text('nick');
                $table->text('comments');
                $table->integer('id_airports')->unsigned();
                $table->timestamps();
            });
            Schema::table('comments', function (Blueprint $table) {
                $table->foreign('id_airports')
                    ->references('id')
                    ->on('airports');
            });

        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
