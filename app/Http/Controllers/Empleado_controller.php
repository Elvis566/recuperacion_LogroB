<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use App\Models\Tareas;
use Illuminate\Http\Request;

class Empleado_controller extends Controller
{
    public function index(){
        $tarea = Tareas::all();
        return view('empleados.empleados', compact('tarea'));
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
}
