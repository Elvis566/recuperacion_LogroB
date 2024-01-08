<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use App\Models\Tareas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Empleado_controller extends Controller
{
    public function index(){
        $tarea = Tareas::all();
        $empleado = Empleados::all();
        return view('empleados.empleados', compact('tarea', 'empleado'));
    }

    public function save(Request $request){
       
        $empleado = new Empleados();
        $empleado->nombre=$request->nombre;
        $empleado->fechaContratacion=$request->fecha_contratacion;
        $empleado->salario=$request->salario;
        $empleado->horasTrabajadas = $request->horas;
        $empleado->departamento=$request->departamento;
        $empleado->id_tarea=$request->tarea_id;
        $empleado->estadoPagado=false;
        $empleado->save();
        return back();
        
    }

    public function Mostrar(){
        $empleados = Empleados::all();
        $tarea = DB::table('tareas')
        ->join('empleados', 'id_tarea', '=', 'tareas.id')
        ->select('empleados.*', 'tarea.tarea')
        ->get();
         return view('empleados.MostrasEmpleados',compact('empleados', 'tarea'));
    }
    public function filtrar(Request $request){
        $empleados = Empleados::all();
        $tarea = DB::table('tareas')
        ->join('empleados', 'id_tarea', '=', 'tareas.id')
        ->where('empleados.departamento', '=', $request->datoFiltrado)
        ->select('empleados.*', 'tareas.tarea')
        ->get();
         return view('empleados.MostrasEmpleados',compact('empleados', 'tarea'));
    }
}
