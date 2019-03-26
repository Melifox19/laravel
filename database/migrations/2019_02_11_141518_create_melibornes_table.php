<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMelibornesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('melibornes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('niveauBatterie');
            $table->string('idSigfox');
            $table->integer('idRucher')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('deleted_at')->nullable();
            $table->softDeletes();
            $table->foreign('idRucher')->references('id')->on('ruchers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('melibornes');
    }
}
