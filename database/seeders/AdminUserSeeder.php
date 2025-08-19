<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@22.utn'],
            [
                'name'           => 'Docente Administrador',
                'password'       => Hash::make('Secreto123'),
                'is_admin'       => true,
                'photo_path'     => 'profiles/default.png'
            ]
        );
    }
}
