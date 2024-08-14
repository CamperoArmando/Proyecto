<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    /**
     * Relación muchos a muchos con el modelo User.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
