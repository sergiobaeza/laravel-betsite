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
            'id' => 1,
            'cuotaElegida' => 2.02,
            'resultado' => '1',
            'game_id' => 1,
            'ticket_id' => 1,
        ]);
        DB::table('ticket_lines')->insert([
            'id' => 2,
            'cuotaElegida' => 1.78,
            'resultado' => '1',
            'game_id' => 2,
            'ticket_id' => 1,
        ]);
        DB::table('ticket_lines')->insert([
            'id' => 3,
            'cuotaElegida' => 1.06,
            'resultado' => '1',
            'game_id' => 3,
            'ticket_id' => 1,
        ]);
        DB::table('ticket_lines')->insert([
            'id' => 4,
            'cuotaElegida' => 1.55,
            'resultado' => '2',
            'game_id' => 4,
            'ticket_id' => 1,
        ]);
        DB::table('ticket_lines')->insert([
            'id' => 5,
            'cuotaElegida' => 1.70,
            'resultado' => '1',
            'game_id' => 5,
            'ticket_id' => 2,
        ]);
        DB::table('ticket_lines')->insert([
            'id' => 6,
            'cuotaElegida' => 1.25,
            'resultado' => 'X',
            'game_id' => 6,
            'ticket_id' => 2,
        ]);
        DB::table('ticket_lines')->insert([
            'id' => 7,
            'cuotaElegida' => 1.62,
            'resultado' => 'X',
            'game_id' => 7,
            'ticket_id' => 2,
        ]);
        DB::table('ticket_lines')->insert([
            'id' => 8,
            'cuotaElegida' => 1.35,
            'resultado' => '2',
            'game_id' => 8,
            'ticket_id' => 2,
        ]);
        DB::table('ticket_lines')->insert([
            'id' => 9,
            'cuotaElegida' => 2.50,
            'resultado' => '2',
            'game_id' => 9,
            'ticket_id' => 3,
        ]);
        DB::table('ticket_lines')->insert([
            'id' => 10,
            'cuotaElegida' => 1.70,
            'resultado' => 'X',
            'game_id' => 10,
            'ticket_id' => 3,
        ]);
        DB::table('ticket_lines')->insert([
            'id' => 11,
            'cuotaElegida' => 1.50,
            'resultado' => '1',
            'game_id' => 11,
            'ticket_id' => 3,
        ]);
        DB::table('ticket_lines')->insert([
            'id' => 12,
            'cuotaElegida' => 1.60,
            'resultado' => '1',
            'game_id' => 12,
            'ticket_id' => 3,
        ]);
        DB::table('ticket_lines')->insert([
            'id' => 13,
            'cuotaElegida' => 1.88,
            'resultado' => '2',
            'game_id' => 13,
            'ticket_id' => 4,
        ]);
        DB::table('ticket_lines')->insert([
            'id' => 14,
            'cuotaElegida' => 1.55,
            'resultado' => 'X',
            'game_id' => 14,
            'ticket_id' => 4,
        ]);
        DB::table('ticket_lines')->insert([
            'id' => 15,
            'cuotaElegida' => 1.60,
            'resultado' => 'X',
            'game_id' => 15,
            'ticket_id' => 4,
        ]);
        DB::table('ticket_lines')->insert([
            'id' => 16,
            'cuotaElegida' => 1.40,
            'resultado' => '2',
            'game_id' => 16,
            'ticket_id' => 4,
        ]);
    }
}