<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // \App\Models\User::factory(10)->create();
         $this->call(CategoriaSeeder::class);
         $this->call(MarcaSeeder::class);
         $this->call(ProductoSeeder::class);
         $this->call(CaracteristicasSeeder::class);
         $this->call(UsuarioSedeer::class);
    }
}
