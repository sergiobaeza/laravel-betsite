<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CleanTablesSeeder::class);
        $this->call(GamesTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(TicketLinesTableSeeder::class);
    }
}
