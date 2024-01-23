<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            ['nom'=> 'Mali'] ,
            ['nom'=> 'Burkina'] ,
            ['nom'=> 'France'] ,
            ['nom'=> 'Belgique'] ,
            ['nom'=> 'Maroc'] ,
            ['nom'=> 'Benin'] ,
            ['nom'=> 'Cote d\'ivoire'] ,
            ['nom'=> 'Burkina faso'] ,
            ['nom'=> 'Ghana'],
            ['nom'=> 'Togo'],
            ['nom'=> 'Mauritanie']
        ]);
    }
}
