<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Añadimos datos a la tabla
        DB::table('games')->insert([
            'id' => 1,
            'cuota1' => 1.24,
            'cuotaX' => 2.02,
            'cuota2' => 2.24,
            'equipo1' => 'Real Betis',
            'equipo2' => 'Real Zaragoza',
            'golesLocal' => 0,
            'golesVisitante' => 0
        ]);
        DB::table('games')->insert([
            'id' => 2,
            'cuota1' => 2.11,
            'cuotaX' => 1.28,
            'cuota2' => 1.78,
            'equipo1' => 'Almeria',
            'equipo2' => 'Cartagena',
            'golesLocal' => 1,
            'golesVisitante' => 2
        ]);
    }
}
