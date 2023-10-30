<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{
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

}
