<!DOCTYPE html>
<html>
<head>
    <title>Agregar Plato</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Agregar Nuevo Plato</h1>
    <form action="{{ route('platos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion"></textarea>
        <br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
