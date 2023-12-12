<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MarqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('marques')->insert([
            ['name'=> 'Apple'] ,
            ['name'=> 'Samsumg'] ,
            ['name'=> 'Huwaei'] ,
            ['name'=> 'Infinix'] ,
            ['name'=> 'Nasco'] ,
            ['name'=> 'LG'] ,
            ['name'=> 'Louis Vuitton'] ,
            ['name'=> 'Gucci'] ,
            ['name'=> 'Dior'],
            ['name'=> 'Equipement Cisco'],
            ['name'=> 'Boisson africaine'],
        ]);
    }
}
