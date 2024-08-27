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
        // \App\Models\User::factory(10)->create();
        \App\Models\Videojuego::factory(1)->create([
            "nombre" => "Doom II",
            "genero" => "FPS",
            "plataforma" => "PC",
            "distribuidora" => "id Software",
            "desarrolladora" => "id Software",
            "fecha_lanzamiento" => "1994-10-10",
            "precio" => 10,
            "descripcion" => "Doom II: Hell on Earth es un videojuego de disparos en primera persona desarrollado por id Software y publicado por GT Interactive el 10 de octubre de 1994. Es el segundo videojuego de la serie Doom."
        ]);

        \App\Models\Videojuego::factory(1)->create([
            "nombre" => "The Legend of Zelda: Ocarina of Time",
            "genero" => "Aventura",
            "plataforma" => "Nintendo 64",
            "distribuidora" => "Nintendo",
            "desarrolladora" => "Nintendo",
            "fecha_lanzamiento" => "1998-11-21",
            "precio" => 20,
            "descripcion" => "The Legend of Zelda: Ocarina of Time es un videojuego de acción-aventura de 1998 desarrollado por la filial Nintendo EAD y publicado por Nintendo para la consola Nintendo 64. Es el quinto juego de la serie The Legend of Zelda."
        ]);
        \App\Models\Videojuego::factory(1)->create([
            "nombre" => "Mortal Kombat 11",
            "genero" => "Lucha",
            "plataforma" => "PC",
            "distribuidora" => "Warner Bros. Interactive Entertainment",
            "desarrolladora" => "NetherRealm Studios",
            "fecha_lanzamiento" => "2019-04-23",
            "precio" => 30,
            "descripcion" => "Mortal Kombat 11 es un videojuego de lucha desarrollado por NetherRealm Studios y publicado por Warner Bros. Interactive Entertainment. Es la undécima entrega principal de la serie de videojuegos de Mortal Kombat y una secuela de Mortal Kombat X de 2015."

        ]);
        \App\Models\Videojuego::factory(1)->create([
            "nombre" => "Castlevania: Symphony of the Night",
            "genero" => "Aventura",
            "plataforma" => "PlayStation",
            "distribuidora" => "Konami",
            "desarrolladora" => "Konami",
            "fecha_lanzamiento" => "1997-10-02",
            "precio" => 40,
            "descripcion" => "Castlevania: Symphony of the Night es un videojuego de acción-aventura desarrollado y publicado por Konami en 1997 para la consola PlayStation. Es el décimo título de la serie Castlevania y el primero en presentar elementos de juego de rol."
        ]);
        \App\Models\Videojuego::factory(1)->create([
            "nombre" => "PUBG: Battlegrounds",
            "genero" => "Battle Royale",
            "plataforma" => "PC",
            "distribuidora" => "PUBG Corporation",
            "desarrolladora" => "PUBG Corporation",
            "fecha_lanzamiento" => "2017-12-20",
            "precio" => 0,
            "descripcion" => "PlayerUnknown's Battlegrounds es un videojuego de batalla en línea multijugador masivo desarrollado y publicado por PUBG Corporation, una subsidiaria de la empresa surcoreana Bluehole. El juego se basa en el modo de juego de mods de ARMA 2 y H1Z1: King of the Kill."
        ]);

        \App\Models\Videojuego::factory(1)->create([
            "nombre" => "Dota 2",
            "genero" => "MOBA",
            "plataforma" => "PC",
            "distribuidora" => "Valve Corporation",
            "desarrolladora" => "Valve Corporation",
            "fecha_lanzamiento" => "2013-07-09",
            "precio" => 0,
            "descripcion" => "Dota 2 es un videojuego perteneciente al género de arena de batalla en línea ARTS, también conocido como MOBA, lanzado el 9 de julio de 2013. El juego fue desarrollado por Valve Corporation."
        ]);

    }
}
