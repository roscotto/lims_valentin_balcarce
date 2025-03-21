<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([ProveedoresSeeder::class]);
        $this->call([ParametrosSeeder::class]);
        $this->call([MetodosDeAnalisisSeeder::class]);
        $this->call([ProductosSeeder::class]);
        $this->call([TiposDeEventosSeeder::class]);
        $this->call([CategoriasDeParametrosSeeder::class]);
        $this->call([CategoriasDeProductosSeeder::class]);
        $this->call([CertificadosSeeder::class]);
        $this->call([ResultadosDeAnalisisSeeder::class]);
    }
}
