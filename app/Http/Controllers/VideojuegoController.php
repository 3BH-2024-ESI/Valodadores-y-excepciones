<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;

class VideojuegoController extends Controller
{
    public function Create(Request $request){
        $videojuego = new Videojuego();
        $videojuego->nombre = $request->nombre;
        $videojuego->genero = $request->genero;
        $videojuego->plataforma = $request->plataforma;
        $videojuego->distribuidora = $request->distribuidora;
        $videojuego->desarrolladora = $request->desarrolladora;
        $videojuego->fecha_lanzamiento = $request->fecha_lanzamiento;
        $videojuego->precio = $request->precio;
        $videojuego->descripcion = $request->descripcion;
        $videojuego->save();
        return $videojuego;
    }

    public function List(Request $request){
        return Videojuego::all();
    }

    public function Show(Request $request, $id){
        return Videojuego::findOrFail($id);
    }

    public function Delete(Request $request, $id){
        $videojuego = Videojuego::findOrFail($id);
        $videojuego->delete();
        return [ "message" => "Videojuego eliminado" ];
    }

    public function Update(Request $request, $id){
        $videojuego = Videojuego::findOrFail($id);
        $videojuego->nombre = $request->nombre;
        $videojuego->genero = $request->genero;
        $videojuego->plataforma = $request->plataforma;
        $videojuego->distribuidora = $request->distribuidora;
        $videojuego->desarrolladora = $request->desarrolladora;
        $videojuego->fecha_lanzamiento = $request->fecha_lanzamiento;
        $videojuego->precio = $request->precio;
        $videojuego->descripcion = $request->descripcion;
        $videojuego->save();
        return $videojuego;
    }
}
