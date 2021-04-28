<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pr = new Producto();
        $pr->nombreProducto='Taza personalizada';
        $pr->descipcionProducto='Taza de ceramica personalizada con diferentes personajes';
        $pr->precioProducto='75';
        $pr->categoria_id='5';
        $pr->skuProducto='123456789';
        $pr->sotckProducto='25';
        $pr->marca_id='2';
        $pr->imageProdcuto='mi_imagen_1.jpg';
        $pr->status='1';
        $pr->save();

        $pr1 = new Producto();
        $pr1->nombreProducto='telefono y9';
        $pr1->descipcionProducto='telefono celular y9 de 64gb de capacidad con 4 gb de ran';
        $pr1->precioProducto='9500';
        $pr1->categoria_id='3';
        $pr1->skuProducto='741258963';
        $pr1->sotckProducto='4';
        $pr1->marca_id='1';
        $pr1->imageProdcuto='mi_imagen_1.jpg';
        $pr1->status='1';
        $pr1->save();

        $pr2 = new Producto();
        $pr2->nombreProducto='audifonos inalambricos huawey';
        $pr2->descipcionProducto='audifonos inalambricos con cable naranja amptlitud de 10 mts';
        $pr2->precioProducto='1500';
        $pr2->categoria_id='3';
        $pr2->skuProducto='789613254';
        $pr2->sotckProducto='2';
        $pr2->marca_id='1';
        $pr2->imageProdcuto='mi_imagen_1.jpg';
        $pr2->status='1';
        $pr2->save();

        $pr3 = new Producto();
        $pr3->nombreProducto='Taza personalizada pokemon';
        $pr3->descipcionProducto='Taza de ceramica personalizada con pokemon';
        $pr3->precioProducto='75';
        $pr3->categoria_id='5';
        $pr3->skuProducto='123456789';
        $pr3->sotckProducto='25';
        $pr3->marca_id='2';
        $pr3->imageProdcuto='mi_imagen_1.jpg';
        $pr3->status='1';
        $pr3->save();

        $pr4 = new Producto();
        $pr4->nombreProducto='Taza personalizada';
        $pr4->descipcionProducto='Taza de ceramica personalizada con diferentes personajes';
        $pr4->precioProducto='75';
        $pr4->categoria_id='5';
        $pr4->skuProducto='123456789';
        $pr4->sotckProducto='25';
        $pr4->marca_id='2';
        $pr4->imageProdcuto='mi_imagen_1.jpg';
        $pr4->status='1';
        $pr4->save();
       
    }
}
