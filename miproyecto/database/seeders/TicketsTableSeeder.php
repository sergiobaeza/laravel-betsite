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
            'user_id' => 1,
            'dineroApostado' => 10.3,
        ]);

        DB::table('tickets')->insert([
            'id' => 2,
            'user_id' => 2,
            'dineroApostado' => 5,
        ]);
        
        DB::table('tickets')->insert([
            'id' => 3,
            'user_id' => 3,
            'dineroApostado' => 12.4,
        ]);

        DB::table('tickets')->insert([
            'id' => 4,
            'user_id' => 4,
            'dineroApostado' => 2.5,
        ]);

        DB::table('tickets')->insert([
            'id' => 5,
            'user_id' => 5,
            'dineroApostado' => 3,
        ]);

        DB::table('tickets')->insert([
            'id' => 6,
            'user_id' => 6,
            'dineroApostado' => 12,
        ]);

        DB::table('tickets')->insert([
            'id' => 7,
            'user_id' => 7,
            'dineroApostado' => 15,
        ]);

        DB::table('tickets')->insert([
            'id' => 8,
            'user_id' => 8,
            'dineroApostado' => 5,
        ]);

        DB::table('tickets')->insert([
            'id' => 9,
            'user_id' => 9,
            'dineroApostado' => 23,
        ]);

        DB::table('tickets')->insert([
            'id' => 10,
            'user_id' => 10,
            'dineroApostado' => 2,
        ]);

        DB::table('tickets')->insert([
            'id' => 11,
            'user_id' => 11,
            'dineroApostado' => 24,
        ]);

        DB::table('tickets')->insert([
            'id' => 12,
            'user_id' => 12,
            'dineroApostado' => 50,
        ]);

        DB::table('tickets')->insert([
            'id' => 13,
            'user_id' => 13,
            'dineroApostado' => 25,
        ]);

        DB::table('tickets')->insert([
            'id' => 14,
            'user_id' => 14,
            'dineroApostado' => 30,
        ]);

        DB::table('tickets')->insert([
            'id' => 15,
            'user_id' => 15,
            'dineroApostado' => 35,
        ]);

        DB::table('tickets')->insert([
            'id' => 16,
            'user_id' => 16,
            'dineroApostado' => 45,
        ]);
    }
}