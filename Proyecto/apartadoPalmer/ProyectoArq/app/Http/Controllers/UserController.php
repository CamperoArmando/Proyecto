<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Recuperar todos los usuarios desde la base de datos
        $users = User::all();

        // Pasar los datos a la vista
        return view('users.index', compact('users'));
    }
}
