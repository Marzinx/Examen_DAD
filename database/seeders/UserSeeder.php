<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = 'Administrador';
        $user->email = 'administrador@prueba.com';
        $user->password = bcrypt('adminstrador');
        $user->save();
        $user1 = new User;
        $user1->name = 'Sandro';
        $user1->email = 'sandroyamunaques@gmail.com';
        $user1->password = 'nerito';
        $user1->save();
    }
}
