<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role; // Importar el modelo Role
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Asegúrate de que los roles existen antes de asignarlos
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Crear usuario 'Luis' con rol 'user'
        $user = User::create([
            'name' => 'Luis',
            'email' => 'luis@fciacolon.com',
            'password' => Hash::make('123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // Asignar el rol de 'user'
        $user->assignRole('user');

        // Crear usuario 'Admin' con rol 'admin'
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@fciacolon.com',
            'password' => Hash::make('123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // Asignar el rol de 'admin'
        $admin->assignRole('admin');
    }
}

