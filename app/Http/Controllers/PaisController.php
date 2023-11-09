<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{

/**
*
*Descripcion de prueba para la clase de desarrollo de backend y api desarrollada de la clase 19/10
*@return \Illuminate\Http\Response
*
*@OA\Get(
*    path="/api/obtener",
*    tags={"obtener"},
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

    public function obtenerPais(){
        $Pais = new Pais();
        $data = $Pais::All();

        return response()->json([
            "success"=>true,
            "message"=>"",
            "data"=>$data,
            "cantidad"=>1
        ]);
    }

    /**
*
*Descripcion de prueba para la clase de desarrollo de backend y api desarrollada de la clase 19/10
*@return \Illuminate\Http\Response
*
*@OA\Post(
*    path="/api/nuevo",
*    tags={"nuevo"},
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

    public function crearPais(Request $request){
        $Pais = new Pais();
        $Pais->nombre_pais = $request->nombre;
        $Pais->save();

        return response()->json([
            "success"=>true,
            "message"=>"",
            "data"=>"Registro creado 'id: ".$Pais->id,
            "cantidad"=>1
        ]);
    }
    
    public function eliminarPais($id) {
        $Pais = Pais::find($id);
        if ($Pais) {
            $Pais->delete();
            return response()->json([
                "success" => true,
                "message" => "País eliminado exitosamente",
                "data" => null,
                "cantidad" => 0
            ]);
        } else {
            return response()->json([
                "success" => false,
                "message" => "El país no se encontró o no se pudo eliminar.",
                "data" => null,
                "cantidad" => 0
            ]);
        }
    }

    public function modificarPais(Request $request, $id){
        $Pais = Pais::find($id);
    
        if ($Pais) {
            $Pais->nombre_pais = $request->nombre;
            $Pais->save();
    
            return response()->json([
                "success" => true,
                "message" => "País modificado exitosamente",
                "data" => $Pais,
                "cantidad" => 1
            ]);
        } else {
            return response()->json([
                "success" => false,
                "message" => "El país no se encontró o no se pudo modificar.",
                "data" => null,
                "cantidad" => 0
            ]);
        }
    }
    

}
