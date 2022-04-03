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
            'cuotaElegida' => 2.02,
            'game_id' => 1,
            'ticket_id' => 1,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.78,
            'game_id' => 2,
            'ticket_id' => 1,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.06,
            'game_id' => 3,
            'ticket_id' => 1,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.55,
            'game_id' => 4,
            'ticket_id' => 1,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.70,
            'game_id' => 5,
            'ticket_id' => 2,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.25,
            'game_id' => 6,
            'ticket_id' => 2,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.62,
            'game_id' => 7,
            'ticket_id' => 2,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.35,
            'game_id' => 8,
            'ticket_id' => 2,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 2.50,
            'game_id' => 9,
            'ticket_id' => 3,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.70,
            'game_id' => 10,
            'ticket_id' => 3,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.50,
            'game_id' => 11,
            'ticket_id' => 3,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.60,
            'game_id' => 12,
            'ticket_id' => 3,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.88,
            'game_id' => 13,
            'ticket_id' => 4,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.55,
            'game_id' => 14,
            'ticket_id' => 4,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.60,
            'game_id' => 15,
            'ticket_id' => 4,
        ]);
        DB::table('ticket_lines')->insert([
            'cuotaElegida' => 1.40,
            'game_id' => 16,
            'ticket_id' => 4,
        ]);
    }
}