<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    // Los campos que son asignables en masa
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
    ];

    // Si necesitas especificar los campos que no son asignables en masa
    // protected $guarded = [];
}
