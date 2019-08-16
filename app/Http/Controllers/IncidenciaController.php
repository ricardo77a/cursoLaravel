<?php

namespace App\Http\Controllers;

use App\Incidencia;
use App\Empleado;
use App\Http\Requests\IncidenciasRequest;
use Illuminate\Http\Request;

class IncidenciaController extends Controller
{
    public function index()
    {
        $incidencias = Incidencia::get();
        return view('incidencias.index', compact('incidencias'));
    }

    public function create()
    {
        $empleados = Empleado::get();
        return view('incidencias.create', compact('empleados'));
    }

    public function store(IncidenciasRequest $request)
    {
        $incidencia = new Incidencia($request->all());
        $incidencia->save();
        return redirect()->route('incidencias.index');
    }

    public function show($id)
    {
        $incidencia = Incidencia::FindOrFail($id);
        return view('incidencias.show', compact('incidencia'));
    }

    public function edit($id)
    {
        $incidencia = Incidencia::FindOrFail($id);
        return view('incidencias.create', compact('incidencia'));
    }

    public function update(Request $request, Incidencia $incidencia)
    {
        $incidencia = Incidencia::FindOrFail($id);
        $incidencia->save();
        return redirect()->route('incidencias.index');
    }

    public function destroy(Incidencia $incidencia)
    {
        $incidencia = Incidencia::FindOrFail($id);
        $incidencia->delete();
        return redirect()->route('incidencias.index');
    }
}
