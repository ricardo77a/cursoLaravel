<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //
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
