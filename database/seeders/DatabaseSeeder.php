<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Videojuego;
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
        // \App\Models\User::factory(10)->create();
      //  User::factory(5)->create();
        //Videojuego::factory(10)->create();
        $this->call(UserSeeder::class);

        $this->call(VideojuegoSeeder::class);

        $this->call(ReviewSeeder::class);
    }
}
