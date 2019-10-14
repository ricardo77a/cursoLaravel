<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;

class EquiposController extends Controller
{
    public function index()
    {
        $equipos = Equipo::get();
        return view('equipos.index', compact('equipos'));
    }

    public function create()
    {
        return view('equipos.create');
    }

    public function store(Request $request)
    {
        $equipo = new Equipo($request->all());
        $equipo->jugados = $equipo->ganados + $equipo->empates + $equipo->perdidos;
        $equipo->puntos = ($equipo->ganados * 3) + $equipo->empates;
        $equipo->save();
        return redirect()->route('equipos.index');
    }

    public function show($id)
    {
        $equipo = Equipo::FindOrFail($id);
        return view('equipos.show', compact('equipo'));
    }

    public function edit($id)
    {
        $equipo = Equipo::FindOrFail($id);
        return view('equipos.edit', compact('equipo'));
    }

    public function update(EquipoRequest $request, $id)
    {
        $equipo = Equipo::FindOrFail($id);
        $equipo->fill($request->all());
        $equipo->save();
        return redirect()->route('equipos.index');
    }

    public function destroy($id)
    {
        $equipo = Equipo::FindOrFail($id);
        $equipo->delete();
        return redirect()->route('equipos.index');
    }

    public function jugados()
    {
        $equipos = Equipo::orderBy('jugados', 'DESC')->get();
        return response()->json([
            'equipos' => $equipos
        ]);
    }

    public function ganados()
    {
        $equipos = Equipo::orderBy('ganados', 'DESC')->get();
        return response()->json([
            'equipos' => $equipos
        ]);
    }

    public function empatados()
    {
        $equipos = Equipo::orderBy('empates', 'DESC')->get();
        return response()->json([
            'equipos' => $equipos
        ]);
    }

    public function perdidos()
    {
        $equipos = Equipo::orderBy('perdidos', 'DESC')->get();
        return response()->json([
            'equipos' => $equipos
        ]);
    }

    public function equipos()
    {
        $equipos = Equipo::orderBy('equipo', 'ASC')->get();
        return response()->json([
            'equipos' => $equipos
        ]);
    }

    public function puntos()
    {
        $equipos = Equipo::orderBy('puntos', 'DESC')->get();
        return response()->json([
            'equipos' => $equipos
        ]);
    }

}
