<!DOCTYPE html>
<html>
<head>
    <title>Ingredientes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Ingredientes</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ingredientes as $ingrediente)
                    <tr>
                        <td>{{ $ingrediente->id }}</td>
                        <td>{{ $ingrediente->nombre }}</td>
                        <td>{{ $ingrediente->descripcion }}</td>
                        <td>{{ $ingrediente->cantidad }}</td>
                        <td>
                            <a href="{{ route('ingredientes.edit', $ingrediente->id) }}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/') }}" class="btn btn-secondary">Atrás</a>
    </div>
</body>
</html>
