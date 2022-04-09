<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_lines', function (Blueprint $table) {
            $table->id();
            $table->float('cuotaElegida');
            $table->string('resultado')->default('null'); 
            $table->timestamps();
            $table->foreignId('game_id')->constrained()->onDelete('cascade');        
            $table->foreignId('ticket_id')->constrained()->onDelete('cascade');       
            $table->unique(['game_id', 'ticket_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_lines');
    }
}
