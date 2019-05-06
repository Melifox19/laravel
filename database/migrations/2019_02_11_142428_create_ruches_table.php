<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRuchesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('addrMelinet')->nullable();
            $table->string('idSigfox')->nullable();
            $table->enum('type', ['meliruche', 'melilabo']);
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->integer('idRucher')->unsigned();
            $table->integer('idMeliborne')->unsigned()->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
            $table->foreign('idRucher')->references('id')->on('ruchers');
            $table->foreign('idMeliborne')->references('id')->on('melibornes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ruches');
    }
}
