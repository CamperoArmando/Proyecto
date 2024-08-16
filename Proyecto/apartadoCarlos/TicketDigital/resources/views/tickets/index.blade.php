<!-- resources/views/tickets/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tickets</title>
    <style>
        /* Estilos Generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #212529;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Encabezado */
        h1 {
            color: #343a40;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f8f9fa;
            color: #343a40;
            font-weight: bold;
        }

        td {
            background-color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        /* Botones */
        .button {
            display: inline-block;
            padding: 8px 16px;
            margin: 5px;
            color: white;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            text-align: center;
            cursor: pointer;
        }

        .button.view {
            background-color: #007bff;
        }

        .button.edit {
            background-color: #17a2b8;
        }

        .button.delete {
            background-color: #dc3545;
        }

        .button:hover {
            opacity: 0.8;
        }

        /* Mensajes de Éxito */
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Tickets</h1>
        <a href="{{ route('tickets.create') }}" class="button">
            Agregar Nuevo Ticket
        </a>

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->id }}</td>
                        <td>{{ $ticket->nombre }}</td>
                        <td>{{ $ticket->descripcion }}</td>
                        <td>{{ $ticket->precio }}</td>
                        <td class="actions">
                            <a href="{{ route('tickets.show', $ticket->id) }}" class="button view">Ver</a>
                            <a href="{{ route('tickets.edit', $ticket->id) }}" class="button edit">Editar</a>
                            <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button delete">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
