<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class respuestaController extends Controller
{

/**
*
*Descripcion de prueba para la clase de desarrollo de backend y api desarrollada de la clase 19/10
*@return \Illuminate\Http\Response
*
*@OA\Get(
*    path="/api/ejecutar",
*    tags={"ejecutar"},
*    summary="Esta es un endpoint/metodo para obtener datos y mostrarlos al usuario",
*    @OA\Response(
*        response=200,
*        description="Se devuelven todos los registros cuando la consulta sea satisfactoria"
*    ),
*      @OA\Response(
*          response=500,
*          description="No se pudo realizar la ejecución al parecer hubo un error interno"
*      )
*  ) 
*/

    public function index(){
        return response() ->json([
            "success"=>true,
            "data"=>"Hola, soy Daniel Lopez",
            "message" => "registro encontrado",
            "cantidad" => 1
        ]);
    }
}
