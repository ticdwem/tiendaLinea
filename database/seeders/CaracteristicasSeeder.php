<?php

namespace Database\Seeders;

use App\Models\Caracteristicas;
use Illuminate\Database\Seeder;

class CaracteristicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ctas = new Caracteristicas();
        $ctas->producto_id='1';
        $ctas->tecnologia='null';
        $ctas->interfaz='null';
        $ctas->frecuencia='null';
        $ctas->botones='null';
        $ctas->resolucion='alta';
        $ctas->memoria='null';
        $ctas->velocidad='null';
        $ctas->material='ceramica';
        $ctas->medidas='22cmX25cm';
        $ctas->save();

        $ctas1 = new Caracteristicas();
        $ctas1->producto_id='2';
        $ctas1->tecnologia='touch inalambrico';
        $ctas1->interfaz='bonito';
        $ctas1->frecuencia='null';
        $ctas1->botones='touch';
        $ctas1->resolucion='alta';
        $ctas1->memoria='64 gb';
        $ctas1->velocidad='16 gb ram';
        $ctas1->material='plastico';
        $ctas1->medidas='22cmX25cm';
        $ctas1->save();

        $ctas2 = new Caracteristicas();
        $ctas2->producto_id='3';
        $ctas2->tecnologia='inalambirco';
        $ctas2->interfaz='null';
        $ctas2->frecuencia='20hz';
        $ctas2->botones='3';
        $ctas2->resolucion='null';
        $ctas2->memoria='null';
        $ctas2->velocidad='45hz';
        $ctas2->material='plastico';
        $ctas2->medidas='22cmX25cm';
        $ctas2->save();

        $ctas3 = new Caracteristicas();
        $ctas3->producto_id='4';
        $ctas3->tecnologia='null';
        $ctas3->interfaz='null';
        $ctas3->frecuencia='null';
        $ctas3->botones='null';
        $ctas3->resolucion='alta';
        $ctas3->memoria='null';
        $ctas3->velocidad='null';
        $ctas3->material='ceramica';
        $ctas3->medidas='22cmX25cm';
        $ctas3->save();

        $ctas4 = new Caracteristicas();
        $ctas4->producto_id='1';
        $ctas4->tecnologia='null';
        $ctas4->interfaz='null';
        $ctas4->frecuencia='null';
        $ctas4->botones='null';
        $ctas4->resolucion='alta';
        $ctas4->memoria='null';
        $ctas4->velocidad='null';
        $ctas4->material='ceramica';
        $ctas4->medidas='22cmX25cm';
        $ctas4->save();
    }
}
