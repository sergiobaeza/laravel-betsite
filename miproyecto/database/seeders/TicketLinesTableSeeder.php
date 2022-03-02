<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketLinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
       
        // Añadimos datos a la tabla
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.24,
            'game_id' => 1,
            'ticket_id' => 1,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.28,
            'game_id' => 1,
            'ticket_id' => 1,
        ]);
    }
}
