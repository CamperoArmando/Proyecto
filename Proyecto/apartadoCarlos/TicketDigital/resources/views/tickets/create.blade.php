<!DOCTYPE html>
<html>
<head>
    <title>Crear Ticket</title>
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

        /* Formularios */
        form {
            margin: 20px 0;
        }

        form label {
            display: block;
            margin-bottom: 5px;
        }

        form input, form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        form button {
            background-color: #28a745;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #218838;
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
        <h1>Crear Nuevo Ticket</h1>
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('tickets.store') }}" method="POST">
            @csrf
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="4" required>{{ old('descripcion') }}</textarea>

            <label for="precio">Precio</label>
            <input type="text" id="precio" name="precio" value="{{ old('precio') }}" required>

            <button type="submit">Crear Ticket</button>
        </form>
        <a href="{{ route('tickets.index') }}" class="button">Volver a la Lista</a>
    </div>
</body>
</html>

