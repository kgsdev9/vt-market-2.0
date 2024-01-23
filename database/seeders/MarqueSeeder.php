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
            ['nom'=> 'Apple'] ,
            ['nom'=> 'Samsumg'] ,
            ['nom'=> 'Huwaei'] ,
            ['nom'=> 'Infinix'] ,
            ['nom'=> 'Nasco'] ,
            ['nom'=> 'LG'] ,
            ['nom'=> 'Louis Vuitton'] ,
            ['nom'=> 'Gucci'] ,
            ['nom'=> 'Dior'],
            ['nom'=> 'Equipement Cisco'],
            ['nom'=> 'Boisson africaine'],
        ]);
    }
}
