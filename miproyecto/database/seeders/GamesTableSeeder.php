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
        DB::table('games')->insert([
            'id' => 3,
            'cuota1' => 1.06,
            'cuotaX' => 2.13,
            'cuota2' => 3.40,
            'equipo1' => 'Real Madrid',
            'equipo2' => 'Elche',
            'golesLocal' => 4,
            'golesVisitante' => 1
        ]);
        DB::table('games')->insert([
            'id' => 4,
            'cuota1' => 1.78,
            'cuotaX' => 1.55,
            'cuota2' => 2.12,
            'equipo1' => 'Real Sociedad',
            'equipo2' => 'Villareal',
            'golesLocal' => 2,
            'golesVisitante' => 2
        ]);
    }
}
