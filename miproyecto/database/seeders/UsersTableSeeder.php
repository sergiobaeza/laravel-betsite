<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Eugenio',
            'email' => 'eugeniob@gmail.com',
            'password' => Hash::make('ebeni00'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Jorge',
            'email' => 'jorgeb@gmail.com',
            'password' => Hash::make('jbuen00'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Nicolas',
            'email' => 'nicolasm@gmail.com',
            'password' => Hash::make('nicomed00'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Sergio',
            'email' => 'sergiob@gmail.com',
            'password' => Hash::make('serbae00'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 5,
            'name' => 'Sonia',
            'email' => 'soniape@gmail.com',
            'password' => Hash::make('sope38'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 6,
            'name' => 'Pablo',
            'email' => 'pablorc@gmail.com',
            'password' => Hash::make('pabc93'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 7,
            'name' => 'Marta',
            'email' => 'martadb@gmail.com',
            'password' => Hash::make('mdb22A'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 8,
            'name' => 'Luis',
            'email' => 'luisgc@gmail.com',
            'password' => Hash::make('llgcA88'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 9,
            'name' => 'Sandra',
            'email' => 'sandratb@gmail.com',
            'password' => Hash::make('stB11A'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 10,
            'name' => 'Gonzalo',
            'email' => 'gonzalp@gmail.com',
            'password' => Hash::make('gLopPer00'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 11,
            'name' => 'Francisca',
            'email' => 'francire@gmail.com',
            'password' => Hash::make('frodrieste33'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 12,
            'name' => 'Noemi',
            'email' => 'noetrape@gmail.com',
            'password' => Hash::make('notrape467'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 13,
            'name' => 'Andres',
            'email' => 'andressanper@gmail.com',
            'password' => Hash::make('andsp99'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 14,
            'name' => 'Tamara',
            'email' => 'tamyrod@gmail.com',
            'password' => Hash::make('tamy56rodRR'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 15,
            'name' => 'Walter',
            'email' => 'walterft@gmail.com',
            'password' => Hash::make('WaLtErAA23'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 16,
            'name' => 'Paula',
            'email' => 'paulicacin@gmail.com',
            'password' => Hash::make('pauLop34'),
            'balance' => 0.0
        ]);
        DB::table('users')->insert([
            'id' => 17,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin'),
            'balance' => 0.0,
            'is_admin' => true
        ]);
    }
}
