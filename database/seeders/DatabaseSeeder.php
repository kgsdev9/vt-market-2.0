<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\City::factory(100)->create();
          \App\Models\Administrateur::factory(20)->create();
        $this->call(RoleSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(MarqueSeeder::class);
         $this->call(CountrySeeder::class);
        // $this->call(CitySeeder::class);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
