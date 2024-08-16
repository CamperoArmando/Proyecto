<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // Agrega los campos que se pueden asignar masivamente
    protected $fillable = [
        'name',
        'email',
        'phone',
        'reservation_date',
        'reservation_time',
        'guest_number',
    ];

    // También puedes proteger contra asignaciones masivas no deseadas
    // Si deseas agregar un campo específico (por ejemplo, `_token`), asegúrate de incluirlo aquí
}
