@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Comentario</h1>
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="customer_name">Nombre del Cliente</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="comment">Comentario</label>
            <textarea name="comment" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </form>
</div>
@endsection
