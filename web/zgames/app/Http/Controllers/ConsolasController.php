<?php

namespace App\Http\Controllers;
use App\Models\Consola;
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



    /**
     * Esta funcnion va a ir a buscar todas las consolas que existan en la bd
     * y las va a retornar
     */
    public function getConsolas(){
        //Equivalente a un select * from consolas
        $consolas= Consola::all();
        return $consolas;
    }

    /**
     * Esta funcion va a registrar una consola de ejemplo en la bd
     * Una request es un objeto php que permite acceder a las cosas que me mandaron 
     * desde la interfaz (desde el formulario)
     * CUANDO EL METODO RECIBE COSAS, EL REQUEST VA EN LOS PARENTESIS
     */

    public function crearConsola(Request $request){
        //El nombre de la funcion debe ser igual a la que esta en rutas


        //Equivalente a un insert into bla bla
        $input = $request->all();//Genera un arreglo con todo lo que mando la interfaz
        //Cuando hablo de interfaz, hablo de javascript
        $consola = new Consola();
        $consola->nombre = $input["nombre"];
        $consola->marca = $input["marca"];
        $consola->anio = $input["anio"];

        $consola->save();
        //Esto guarda los datos en la base de datos
        return $consola;
    }

    public function eliminarConsola(Request $request){
        $input = $request->all();
        $id = $input["id"];
        //Elocuent: Eladministradr de BD de Laravel se llama Eloquent
        //1.- Ir a buscar el registro a la bd
        $consola = Consola::findOrFail($id); //Permite buscar solo por la clave primaria (id)
        // Si no existe, explota, si existe, sigue con el codigo

        //2.- Para eliminar llamo al metodo delete
        $consola->delete(); //DELETE FROM consolas WHERE id=1

        return "ok";
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