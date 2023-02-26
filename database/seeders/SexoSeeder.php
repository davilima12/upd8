<?php

namespace Database\Seeders;

use App\Models\Sexo;
use Illuminate\Database\Seeder;

class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sexo::create(
            [
                'nome' => 'Masculino',
            ]
        );

        Sexo::create(
            [
                'nome' => 'Feminino',
            ]
        );

    }
}
