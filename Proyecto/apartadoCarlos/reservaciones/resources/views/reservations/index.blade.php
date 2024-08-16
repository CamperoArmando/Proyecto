@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reservaciones</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('reservations.create') }}" class="btn btn-primary">Hacer una Reservación</a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Número de invitados</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->name }}</td>
                <td>{{ $reservation->email }}</td>
                <td>{{ $reservation->phone }}</td>
                <td>{{ $reservation->reservation_date }}</td>
                <td>{{ $reservation->reservation_time }}</td>
                <td>{{ $reservation->guest_number }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
