<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partido', function (Blueprint $table) {
            $table->id();
            $table->float('cuota1');
            $table->float('cuotaX');
            $table->float('cuota2');
            $table->string('equipo1');
            $table->string('equipo2');
            $table->integer('golesLocal');
            $table->integer('golesVisitante');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partido');
    }
}
