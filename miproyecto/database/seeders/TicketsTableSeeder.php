<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Añadimos datos a la tabla
        DB::table('tickets')->insert([
            'id' => 1,
            'dineroApostado' => 10.3,
        ]);
    }
}
