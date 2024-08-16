<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class RolesSeeder extends Seeder
{
    public function run()
    {
        $roles = ['Vendedor', 'Administrador', 'Supervisor'];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        // Asignar roles a un usuario (ejemplo)
        $user = User::find(1); // Asumiendo que el usuario con ID 1 es un administrador
        if ($user) {
            $user->roles()->attach(Role::where('name', 'Administrador')->first());
        }
    }
}
