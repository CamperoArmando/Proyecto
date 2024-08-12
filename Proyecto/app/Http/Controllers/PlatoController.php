<?php

namespace App\Http\Controllers;

use App\Models\Plato; // Cambia a tu modelo real
use Illuminate\Http\Request;

class PlatoController extends Controller
{
    // Mostrar la lista de precios de platos
    public function index()
    {
        $platos = Plato::all();
        return view('platos.index', compact('platos'));
    }

    // Mostrar el formulario para editar detalles del precio
    public function showDetails($id)
    {
        $plato = Plato::findOrFail($id);
        return view('platos.details', compact('plato'));
    }

    // Actualizar los detalles del precio
    public function updateDetails(Request $request, $id)
    {
        $plato = Plato::findOrFail($id);
        $plato->update($request->only('precio')); // Solo actualizar el campo precio
        return redirect()->route('platos.showDetails', $plato->id)->with('success', 'Detalles del precio actualizados correctamente');
    }
}
