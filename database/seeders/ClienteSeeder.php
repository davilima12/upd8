<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create(
            [
                'nome' => 'upd8',
                'cpf' => '100.700.800-00',
                'data_nascimento' => '2023-02-25',
                'endereco' => 'rua teste, bairro teste numero 1',
                'estado_id' => 1,
                'cidade_id' => 1,
                'sexo_id' => 2,
            ]
        );

        Cliente::create(
            [
                'nome' => 'upd8 teste1',
                'cpf' => '700.700.700-70',
                'data_nascimento' => '2023-02-25',
                'endereco' => 'rua teste, bairro teste numero 1',
                'estado_id' => 1,
                'cidade_id' => 1,
                'sexo_id' => 1,
            ]
        );

        Cliente::create(
            [
                'nome' => 'upd8 teste2',
                'cpf' => '200.300.400-50',
                'data_nascimento' => '2023-02-25',
                'endereco' => 'rua teste, bairro teste numero 1',
                'estado_id' => 1,
                'cidade_id' => 1,
                'sexo_id' => 2,
            ]
        );

        Cliente::create(
            [
                'nome' => 'upd8 teste3',
                'cpf' => '150.800.900-10',
                'data_nascimento' => '2023-02-25',
                'endereco' => 'rua teste, bairro teste numero 1',
                'estado_id' => 1,
                'cidade_id' => 1,
                'sexo_id' => 1,
            ]
        );
    }
}
