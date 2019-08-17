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
        $empleados = Empleado::get();
        $incidencia = Incidencia::FindOrFail($id);
        return view('incidencias.edit', compact('incidencia', 'empleados'));
    }

    public function update(IncidenciasRequest $request, $id)
    {
        $incidencia = Incidencia::FindOrFail($id);
        $incidencia->fill($request->all());
        $incidencia->save();
        return redirect()->route('incidencias.index');
    }

    public function destroy($id)
    {
        $incidencia = Incidencia::FindOrFail($id);
        $incidencia->delete();
        return redirect()->route('incidencias.index');
    }
}
