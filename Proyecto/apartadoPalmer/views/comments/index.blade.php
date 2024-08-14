@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Comentarios</h1>
    <a href="{{ route('comments.create') }}" class="btn btn-primary">Agregar Comentario</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Cliente</th>
                <th>Comentario</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
            <tr>
                <td>{{ $comment->id }}</td>
                <td>{{ $comment->customer_name }}</td>
                <td>{{ $comment->comment }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
