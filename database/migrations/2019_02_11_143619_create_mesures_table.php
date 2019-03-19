<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMesuresTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesures', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('horodatageMesure');
            $table->float('temperature');
            $table->integer('humidite');
            $table->integer('niveauBatterie');
            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();
            $table->integer('debitSonore')->nullable();
            $table->integer('idRuche')->unsigned();
            $table->timestamps()->useCurrent();
            $table->softDeletes();
            $table->foreign('idRuche')->references('id')->on('ruches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mesures');
    }
}
