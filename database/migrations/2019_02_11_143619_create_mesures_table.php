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
            $table->float('masse');
            $table->float('temperatureInt');
            $table->float('temperatureExt');
            $table->integer('humiditeInt');
            $table->integer('humiditeExt')->nullable();
            $table->integer('pression');
            $table->integer('niveauBatterie');
            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();
            $table->integer('debitSonore200')->nullable();
            $table->integer('debitSonore400')->nullable();
            $table->integer('idRuche')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
