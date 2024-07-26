<?php

namespace App\Http\Controllers;

use App\Models\Ingregidentes;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
        // Método para mostrar la lista de ingredientes
        public function index()
        {
            $ingredientes = Ingredientes::all();
            return view('ingredientes.index', compact('ingredientes'));
        }
    
        // Método para mostrar el formulario de edición de un ingrediente
        public function edit($id)
        {
            $ingrediente = Ingredientes::findOrFail($id);
            return view('ingredientes.edit', compact('ingrediente'));
        }
    
        // Método para actualizar un ingrediente en la base de datos
        public function update(Request $request, $id)
        {
            $ingrediente = Ingredientes::findOrFail($id);
            $ingrediente->nombre = $request->nombre;
            $ingrediente->descripcion = $request->descripcion;
            $ingrediente->cantidad = $request->cantidad;
            $ingrediente->save();
    
            return redirect()->route('ingredientes.index')->with('success', 'Ingrediente actualizado correctamente');
        }
}
