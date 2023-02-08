<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    //consulta
    public function cargaareas(){
        $consulta = Area::orderBy('nombre', 'ASC')->get();
        return response()->json($consulta, 201);
    }

    public function cargaempleados(){
        // $consulta = DB::select('select * from empleados order by nombre asc');
        $consulta = DB::select('SELECT e.id, e.nombre, e.apellidos, e.edad, e.sexo, e.salario, e.id_area,
                                       a.nombre AS areatrabajo
    FROM empleados AS e
    INNER JOIN areas AS a ON a.id = e.id
    ORDER BY e.nombre ASC');
        return response()->json($consulta,201);
    }


    public function buscaeid($id){
//         $consulta = DB::select('SELECT e.id, e.nombre, e.apellidos, e.edad, e.sexo, e.salario, e.id_area,
//         a.nombre AS areatrabajo
//  FROM empleados AS e
//  INNER JOIN areas AS a ON a.id = e.id
//  WHERE e.id = $id
 
//  ORDER BY e.nombre ASC'
// );

$consulta = Empleado::find($id);
 
        return response()->json($consulta,201);
    }


    //eliminar
    public function eliminae($id){
        $consulta = Empleado::find($id);
        $consulta->delete();

        return response()->json(null, 294);

    }

    //crear
    public function altae(Request $request){
        $consulta = Empleado::create($request->all());
        return response()->json($consulta, 201);
    }

    // modificar
    public function modificae(Request $request){
        $empleados = Empleado::find($request->id);
        $empleados->update($request->all());

        return response()->json($empleados,200);
    }
}
