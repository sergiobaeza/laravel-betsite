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

        DB::table('tickets')->insert([
            'id' => 2,
            'dineroApostado' => 5,
        ]);
        
        DB::table('tickets')->insert([
            'id' => 3,
            'dineroApostado' => 12.4,
        ]);

        DB::table('tickets')->insert([
            'id' => 4,
            'dineroApostado' => 2.5,
        ]);

        DB::table('tickets')->insert([
            'id' => 5,
            'dineroApostado' => 3,
        ]);

        DB::table('tickets')->insert([
            'id' => 6,
            'dineroApostado' => 12,
        ]);

        DB::table('tickets')->insert([
            'id' => 7,
            'dineroApostado' => 15,
        ]);

        DB::table('tickets')->insert([
            'id' => 8,
            'dineroApostado' => 5,
        ]);

        DB::table('tickets')->insert([
            'id' => 9,
            'dineroApostado' => 23,
        ]);

        DB::table('tickets')->insert([
            'id' => 10,
            'dineroApostado' => 2,
        ]);

        DB::table('tickets')->insert([
            'id' => 11,
            'dineroApostado' => 24,
        ]);

        DB::table('tickets')->insert([
            'id' => 12,
            'dineroApostado' => 50,
        ]);

        DB::table('tickets')->insert([
            'id' => 13,
            'dineroApostado' => 25,
        ]);

        DB::table('tickets')->insert([
            'id' => 14,
            'dineroApostado' => 30,
        ]);

        DB::table('tickets')->insert([
            'id' => 15,
            'dineroApostado' => 35,
        ]);

        DB::table('tickets')->insert([
            'id' => 16,
            'dineroApostado' => 45,
        ]);
    }
}