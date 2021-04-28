<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();
        $categoria->nombreCatagoria = 'Computo';
        $categoria->descripcionCategoria = 'Este es una pequeña descripcion de la categoria';
        $categoria->save();
        $categoria1 = new Categoria();
        $categoria1->nombreCatagoria = 'Casa y hogar';
        $categoria1->descripcionCategoria = 'Este es una pequeña descripcion de la categoria';
        $categoria1->save();
        $categoria2 = new Categoria();
        $categoria2->nombreCatagoria = 'Telefonia';
        $categoria2->descripcionCategoria = 'Este es una pequeña descripcion de la categoria';
        $categoria2->save();
        $categoria3 = new Categoria();
        $categoria3->nombreCatagoria = 'Software';
        $categoria3->descripcionCategoria = 'Este es una pequeña descripcion de la categoria';
        $categoria3->save();
        $categoria4 = new Categoria();          
        $categoria4->nombreCatagoria = 'Taza';
        $categoria4->descripcionCategoria = 'Este es una pequeña descripcion de la categoria';
        $categoria4->save();            
    }
}
