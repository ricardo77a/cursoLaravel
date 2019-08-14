<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadosController extends Controller
{
    public function index()
    {
        return view('empleados.index');
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
        $empleado = new Empleado($request->all());
        /* Asignación */
        /*
        $empleado->nombre = $request->nombre;
        $nombre = 'Ramón';
        $empleado->nombre = $nombre;
        */
        //dd($request->all(), $empleado);
        $empleado->save();
        return redirect()->route('empleados.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    /* Condicionales y Loops */
    public function info()
    {
        $arreglo = array("Ricardo", "Victor", "Pablo", "Eduardo", "Zaahira", "Raul", "Carlos", "Javier", "Adan", "Mariel", "Pedro");
        //dd($arreglo);

        $calificacion = 50;

        return view('empleados.info', compact('arreglo', 'calificacion'));
    }
}
