<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Vehiculo;
use Illuminate\Support\Str;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 200; $i++){
            Vehiculo::create([
                'placa' => 'Entrada' . Str::random(5),
                'modelo' => 'Modelo del Auto' . $i,
                'propietario' => 'Vehiculo' . Str::random(8),
                'activo' => rand(0, 1) == 1 ? true : false,
            ]);
        }
    }
}
