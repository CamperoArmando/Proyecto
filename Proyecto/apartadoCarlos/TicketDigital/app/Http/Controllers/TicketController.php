<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function index()
    {
        // Obtener todos los tickets desde la base de datos
        $tickets = Ticket::all();

        // Pasar los tickets a la vista index
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        // Validar los datos de la solicitud
        $datosValidados = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric'
        ]);

        // Crear un nuevo ticket utilizando los datos validados
        Ticket::create($datosValidados);

        // Redirigir a la vista de índice con un mensaje de éxito
        return redirect()->route('tickets.index')->with('success', 'Ticket creado exitosamente.');
    }
}
