<?php

namespace App\Http\Controllers;
//Esto es el namespace (App\Http\Controllers;)
use Illuminate\Http\Request;
//Aqui va toda la logica vinculada a las consolas

class ConsolasController extends Controller
{
    public function getMarcas(){
        $marcas = array(); //$marcas = ["Sony", "Microsoft", "Nintendo", "Sega"];
        $marcas[] = "Sony";
        $marcas[] = "Microsoft";
        $marcas[] = "Nintendo";
        $marcas[] = "Sega";
         
        return $marcas;
    }
}

/*
view productos.blade.php
renderizar los productos

ProductosController:
    -ir a buiscar los productos a bd
    -los filtra por los disponibles
    -formatea el precio
    -retorna la lista de productos procesados
*/ 