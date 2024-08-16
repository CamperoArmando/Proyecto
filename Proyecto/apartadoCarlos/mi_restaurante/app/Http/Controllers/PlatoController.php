<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;

class PlatoController extends Controller
{
    public function index()
    {
        $platos = Plato::all();
        return view('platos.index', compact('platos'));
    }

    public function create()
    {
        return view('platos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
        ]);

        Plato::create($request->all());

        return redirect()->route('platos.index')
                         ->with('success', 'Plato creado exitosamente.');
    }

    public function show(Plato $plato)
    {
        return view('platos.show', compact('plato'));
    }

    public function edit(Plato $plato)
    {
        return view('platos.edit', compact('plato'));
    }

    public function update(Request $request, Plato $plato)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
        ]);

        $plato->update($request->all());

        return redirect()->route('platos.index')
                         ->with('success', 'Plato actualizado exitosamente.');
    }

    public function destroy(Plato $plato)
    {
        $plato->delete();

        return redirect()->route('platos.index')
                         ->with('success', 'Plato eliminado exitosamente.');
    }
}
