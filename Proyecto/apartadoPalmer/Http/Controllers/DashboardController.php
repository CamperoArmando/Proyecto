<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('home', compact('users')); // O 'dashboard.index' si es la vista correcta
    }
}