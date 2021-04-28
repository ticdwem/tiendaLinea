<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marca = new Marca();
        $marca->nombreMarca = 'Huawey';
        $marca->descripcionMarca = "este es una prueba de lo que podemos poner desde un seed Huawey";
        $marca->save();
        $marca1 = new Marca();
        $marca1->nombreMarca = 'Propia';
        $marca1->descripcionMarca = "este es una prueba de lo que podemos poner desde un seed Propia";
        $marca1->save();
        $marca2 = new Marca();
        $marca2->nombreMarca = 'windows';
        $marca2->descripcionMarca = "este es una prueba de lo que podemos poner desde un seed windows";
        $marca2->save();
        $marca3 = new Marca();
        $marca3->nombreMarca = 'Asus';
        $marca3->descripcionMarca = "este es una prueba de lo que podemos poner desde un seed Asus";
        $marca3->save();
        $marca4 = new Marca();          
        $marca4->nombreMarca = 'Hp';
        $marca4->descripcionMarca = "este es una prueba de lo que podemos poner desde un seed Hp";
        $marca4->save();            
    }
}
