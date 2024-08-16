<!DOCTYPE html>
<html>
<head>
    <title>Lista de Platos</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Lista de Platos</h1>
    <a href="{{ route('platos.create') }}">Agregar Nuevo Plato</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($platos as $plato)
                <tr>
                    <td>{{ $plato->nombre }}</td>
                    <td>{{ $plato->descripcion }}</td>
                    <td>{{ $plato->precio }}</td>
                    <td>
                        <a href="{{ route('platos.show', $plato->id) }}">Ver</a>
                        <a href="{{ route('platos.edit', $plato->id) }}">Editar</a>
                        <form action="{{ route('platos.destroy', $plato->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
