<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Http\Requests\EmpleadosRequest;

class EmpleadosController extends Controller
{
    public function index()
    {
        $empleados = Empleado::get();
        //$empleados = Empleado::get();
        //dd($empleados);
        return view('empleados.index', compact('empleados'));
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(EmpleadosRequest $request)
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
        $empleado = Empleado::FindOrFail($id);
        return view('empleados.show', compact('empleado'));
    }

    public function edit($id)
    {
        $empleado = Empleado::FindOrFail($id);
        return view('empleados.edit', compact('empleado'));
    }

    public function update(EmpleadosRequest $request, $id)
    {
        $empleado = Empleado::FindOrFail($id);
        $empleado->fill($request->all());
        $empleado->save();
        return redirect()->route('empleados.index');
    }

    public function destroy($id)
    {
        $empleado = Empleado::FindOrFail($id);
        $empleado->delete();
        return redirect()->route('empleados.index');
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
