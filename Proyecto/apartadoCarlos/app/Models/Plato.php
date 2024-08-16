<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    // Configura los nombres personalizados para las columnas de timestamp
    const CREATED_AT = 'creado_en';
    const UPDATED_AT = 'actualizar_en';

    protected $fillable = ['nombre', 'descripcion', 'precio'];
}