<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlertesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertes', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('horodatageAlerte');
            $table->enum('type', ['capteur', 'mesure', 'vol']);
            $table->string('description');
            $table->integer('idRuche')->unsigned();
            $table->timestamps();
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
        Schema::drop('alertes');
    }
}
