<!DOCTYPE html>
<html>
<head>
    <title>Editar Plato</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Editar Plato</h1>
    <form action="{{ route('platos.update', $plato->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $plato->nombre }}" required>
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion">{{ $plato->descripcion }}</textarea>
        <br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" value="{{ $plato->precio }}" step="0.01" required>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
