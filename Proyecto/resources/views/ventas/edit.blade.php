<!DOCTYPE html>
<html>
<head>
    <title>Editar Venta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Venta</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('ventas.update', $venta->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre del Plato</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $venta->nombre) }}" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" class="form-control" step="0.01" value="{{ old('precio', $venta->precio) }}" required>
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('ventas.index') }}" class="btn btn-secondary">Cancelar</a>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Atrás</a>
            </div>
        </form>
    </div>
</body>
</html>
