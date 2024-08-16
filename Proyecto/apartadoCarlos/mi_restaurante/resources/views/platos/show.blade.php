<!DOCTYPE html>
<html>
<head>
    <title>Ver Plato</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Detalles del Plato</h1>
    <p><strong>Nombre:</strong> {{ $plato->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $plato->descripcion }}</p>
    <p><strong>Precio:</strong> {{ $plato->precio }}</p>
    <a href="{{ route('platos.index') }}">Regresar a la lista</a>
</body>
</html>
