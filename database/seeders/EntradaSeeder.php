<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Carbon\Carbon;
use App\Models\Entrada;
use Illuminate\Support\Str;

class EntradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++){
            Entrada::create([
                'placa' => 'Entrada' . Str::random(5),
                'fecha' => Carbon::now()->subDays(rand(1, 30))->format('Y-m-d H:i:s'),
                'activo' => rand(0, 1) == 1 ? true : false,
            ]);
        }
    }
}
