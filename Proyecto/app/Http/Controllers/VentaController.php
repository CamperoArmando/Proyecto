<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    // Mostrar la lista de ventas
    public function index()
    {
        $ventas = Venta::all(); // Obtener todas las ventas
        return view('ventas.index', compact('ventas')); // Pasar las ventas a la vista
    }

    // Mostrar el formulario de edición
    public function edit($id)
    {
        $venta = Venta::findOrFail($id); // Encontrar la venta por ID
        return view('ventas.edit', compact('venta')); // Pasar la venta a la vista
    }

    // Actualizar los datos de la venta
    public function update(Request $request, $id)
    {
        $venta = Venta::findOrFail($id); // Encontrar la venta por ID
        $venta->update($request->all()); // Actualizar los datos
        return redirect()->route('ventas.index')->with('success', 'Venta actualizada correctamente'); // Redirigir al índice con mensaje de éxito
    }
}
