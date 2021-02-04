<?php

namespace Database\Seeders;

use App\Models\Videojuego;
use Illuminate\Database\Seeder;

class VideojuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videojuego = new Videojuego();

        $videojuego->name = "megaman";
        $videojuego->genre = "accion";
        $videojuego->price = 55;
        $videojuego->stock = 22;
        $videojuego->discount = 10;
        $videojuego->user_id = 1;

        $videojuego->save();

        $videojuego2 = new Videojuego();

        $videojuego2->name = "megaman";
        $videojuego2->genre = "accion";
        $videojuego2->price = 55;
        $videojuego2->stock = 22;
        $videojuego2->discount = 10;
        $videojuego2->user_id = 2;

        $videojuego2->save();

        $videojuego3 = new Videojuego();

        $videojuego3->name = "mario kart";
        $videojuego3->genre = "carreras";
        $videojuego3->price = 105;
        $videojuego3->stock = 22;
        $videojuego3->discount = 15;
        $videojuego3->user_id = 2;

        $videojuego3->save();
    }
}
