<?php

namespace App\Http\Controllers;

use App\Models\Tareas;
use Illuminate\Http\Request;

class Tarea_controller extends Controller
{
    public function index(){
        return view('empleados.tareas');
    }

    public function save(Request $request){
        $tarea = new Tareas();
        $message='';
        $tarea->tarea = $request->tarea;
        $tarea->horas = $request->horas;
        if($request->horas < 3 && $request->horas > 0){
            $tarea->save();
        }else{
            $message= "Las horas asignadas deben ser mayores a cero o menores a tres";
        }
        return redirect('/')->with('status', $message);
        
    }
}
