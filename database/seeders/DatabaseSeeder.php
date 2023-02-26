<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CidadeSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(SexoSeeder::class);
        $this->call(ClienteSeeder::class);
    }
}
