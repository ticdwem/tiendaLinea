<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function datatable(){
        /* $productos = Producto::select('nombreProducto','descipcionProducto','precioProducto',[Categoria->nombreCatagoria],'marca_id')->get(); */
        $productos = DB::table('productos')
                            ->join('categorias','productos.categoria_id','=','categorias.id')
                            ->join('marcas','productos.marca_id','=','marcas.id')
                            ->select('productos.id','productos.nombreProducto','productos.descipcionProducto','productos.precioProducto','productos.sotckProducto','categorias.nombreCatagoria','marcas.nombreMarca')
                            ->orderBy('productos.id', 'desc')
                            ->get();

        return datatables()
                ->of($productos)
                ->addColumn('btn','logeado.productos.action')
                ->rawColumns(['btn'])
                ->toJson();
    }

    public function eliminar($imagen){
      return $imagen;
         /* $imagen->delete();
         return redirect()->route('producto.index'); */
    }
}
