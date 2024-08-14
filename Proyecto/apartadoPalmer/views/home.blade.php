@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenido, {{ Auth::user()->name }}!</h1>
    <p>Esta es tu página de inicio.</p>

    <div class="card mt-4">
        <div class="card-header">Panel de Control</div>
        <div class="card-body">
            <p>Accede a las diferentes secciones del sistema a través del menú superior.</p>
        </div>
    </div>
</div>
@endsection

