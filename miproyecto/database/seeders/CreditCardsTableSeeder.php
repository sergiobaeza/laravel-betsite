<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreditCardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('credit_cards')->insert([
            'id' => 1,
            'num' => '5133830004552438',
            'cvv' => '334',
            'cadMonth' => '03',
            'cadYear' => '2027',
            'user_id' => 1,
        ]);

        DB::table('credit_cards')->insert([
            'id' => 2,
            'num' => '5166843004772438',
            'cvv' => '335',
            'cadMonth' => '04',
            'cadYear' => '2027',
            'user_id' => 2,
        ]);
        DB::table('credit_cards')->insert([
            'id' => 3,
            'num' => '5143831104556638',
            'cvv' => '336',
            'cadMonth' => '05',
            'cadYear' => '2027',
            'user_id' => 3,
        ]);
        DB::table('credit_cards')->insert([
            'id' => 4,
            'num' => '5132834504558938',
            'cvv' => '337',
            'cadMonth' => '06',
            'cadYear' => '2027',
            'user_id' => 4,
        ]);
        DB::table('credit_cards')->insert([
            'id' => 5,
            'num' => '5179830134552439',
            'cvv' => '338',
            'cadMonth' => '06',
            'cadYear' => '2027',
            'user_id' => 5,
        ]);
        DB::table('credit_cards')->insert([
            'id' => 6,
            'num' => '5145830614552431',
            'cvv' => '339',
            'cadMonth' => '07',
            'cadYear' => '2027',
            'user_id' => 6,
        ]);
    }
}
