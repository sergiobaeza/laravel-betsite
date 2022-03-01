<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignsKeyToTicketlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ticket_lines', function (Blueprint $table) {
            $table->foreignId('game_id')->constrained();        
            $table->foreignId('ticket_id')->constrained();        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticket_lines', function (Blueprint $table) {
            $table->dropForeign(['game_id']);
            $table->dropForeign(['ticket_id']);
        });
    }
}
