<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;

    // Especifica la tabla si el nombre no sigue la convención plural
    protected $table = 'platos';

    // Especifica los campos que se pueden asignar de manera masiva
    protected $fillable = [
        'nombre',
        'precio',
    ];

    // Opcional: si deseas trabajar con fechas en formato de carbono, usa las siguientes líneas
    // protected $dates = ['created_at', 'updated_at'];
}
