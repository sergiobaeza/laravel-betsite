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
        DB::table('games')->insert([
            'id' => 5,
            'cuota1' => 1.55,
            'cuotaX' => 1.70,
            'cuota2' => 2.16,
            'equipo1' => 'Real Madrid',
            'equipo2' => 'Barcelona',
            'golesLocal' => 1,
            'golesVisitante' => 4
        ]);
        DB::table('games')->insert([
            'id' => 6,
            'cuota1' => 1.25,
            'cuotaX' => 1.50,
            'cuota2' => 3.00,
            'equipo1' => 'Tenerife',
            'equipo2' => 'Las Palmas',
            'golesLocal' => 3,
            'golesVisitante' => 0
        ]);
        DB::table('games')->insert([
            'id' => 7,
            'cuota1' => 1.62,
            'cuotaX' => 1.89,
            'cuota2' => 2.12,
            'equipo1' => 'Bayern de Munich',
            'equipo2' => 'Borussia Dormund',
            'golesLocal' => 2,
            'golesVisitante' => 2
        ]);
        DB::table('games')->insert([
            'id' => 8,
            'cuota1' => 1.35,
            'cuotaX' => 1.55,
            'cuota2' => 2.16,
            'equipo1' => 'Hercules',
            'equipo2' => 'Elche',
            'golesLocal' => 4,
            'golesVisitante' => 0
        ]);
        DB::table('games')->insert([
            'id' => 9,
            'cuota1' => 1.80,
            'cuotaX' => 2.00,
            'cuota2' => 2.50,
            'equipo1' => 'Atletico Madrid',
            'equipo2' => 'Real Madrid',
            'golesLocal' => 3,
            'golesVisitante' => 3
        ]);
        DB::table('games')->insert([
            'id' => 10,
            'cuota1' => 1.40,
            'cuotaX' => 1.70,
            'cuota2' => 2.30,
            'equipo1' => 'Sevilla',
            'equipo2' => 'Barcelona',
            'golesLocal' => 3,
            'golesVisitante' => 0
        ]);
        DB::table('games')->insert([
            'id' => 11,
            'cuota1' => 1.50,
            'cuotaX' => 1.70,
            'cuota2' => 1.80,
            'equipo1' => 'Real Madrid',
            'equipo2' => 'Chelsea',
            'golesLocal' => 1,
            'golesVisitante' => 3
        ]);
        DB::table('games')->insert([
            'id' => 12,
            'cuota1' => 1.60,
            'cuotaX' => 1.80,
            'cuota2' => 2.30,
            'equipo1' => 'Sevilla',
            'equipo2' => 'Real Betis',
            'golesLocal' => 2,
            'golesVisitante' => 3
        ]);
        DB::table('games')->insert([
            'id' => 13,
            'cuota1' => 2.10,
            'cuotaX' => 1.88,
            'cuota2' => 1.50,
            'equipo1' => 'Boca Juniors',
            'equipo2' => 'River Plate',
            'golesLocal' => 2,
            'golesVisitante' => 1
        ]);
        DB::table('games')->insert([
            'id' => 14,
            'cuota1' => 1.55,
            'cuotaX' => 1.71,
            'cuota2' => 2.05,
            'equipo1' => 'Milan',
            'equipo2' => 'Inter Milan',
            'golesLocal' => 2,
            'golesVisitante' => 0
        ]);
        DB::table('games')->insert([
            'id' => 15,
            'cuota1' => 1.77,
            'cuotaX' => 1.80,
            'cuota2' => 1.60,
            'equipo1' => 'Atletic de Bilbao',
            'equipo2' => 'Real Sociedad',
            'golesLocal' => 3,
            'golesVisitante' => 2
        ]);
        DB::table('games')->insert([
            'id' => 16,
            'cuota1' => 1.40,
            'cuotaX' => 1.62,
            'cuota2' => 1.95,
            'equipo1' => 'Barcelona',
            'equipo2' => 'Valencia',
            'golesLocal' => 1,
            'golesVisitante' => 0
        ]);

    }
}
