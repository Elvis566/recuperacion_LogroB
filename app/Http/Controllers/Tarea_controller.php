<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tarea_controller extends Controller
{
    public function index(){
        return view('empleados.tareas');
    }
}
