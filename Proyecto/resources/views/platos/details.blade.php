<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Precio del Plato</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detalles del Precio del Plato</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('platos.updateDetails', $plato->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre del Plato</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $plato->nombre }}" disabled>
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ $plato->precio }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Precio</button>
            <a href="{{ route('platos.index') }}" class="btn btn-secondary">Atrás</a>
        </form>
    </div>
</body>
</html>
