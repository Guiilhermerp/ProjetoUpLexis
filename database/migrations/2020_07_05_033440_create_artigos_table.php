<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artigos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_usuario');


            $table->string('titulo')->nullable();
            $table->string('link')->nullable();

            $table->timestamps();
        });

        Schema::table('artigos', function (Blueprint $table) {
            $table->foreign('id_usuario')->references('id')->on('usuario')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artigos');
    }
}
