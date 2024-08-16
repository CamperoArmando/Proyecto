@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Hacer una Reservación</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="phone">Teléfono:</label>
            <input type="text" id="phone" name="phone" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="reservation_date">Fecha:</label>
            <input type="date" id="reservation_date" name="reservation_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="reservation_time">Hora:</label>
            <input type="time" id="reservation_time" name="reservation_time" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="guest_number">Número de invitados:</label>
            <input type="number" id="guest_number" name="guest_number" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Reservar</button>
    </form>
</div>
@endsection
