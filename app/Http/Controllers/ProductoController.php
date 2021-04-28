<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $productos = Producto::all();
        //return view('logeado.productos.index')->with('producto',$productos);
        return view('logeado.productos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = DB::table('categorias')->get()->pluck('nombreCatagoria','id');
        $marcas = DB::table('marcas')->get()->pluck('nombreMarca','id');

        return view('logeado.productos.create')->with('categoria',$categorias)
                                               ->with('marca',$marcas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //dd($request['imageProdcuto']->store('upload-recetas','public'));
        $data = $request->validate([
            "nombreProducto" => 'required|min:10|max:100',
            "skuProducto" => 'required|max:10',
            "marca_id" => 'required|digits_between:1,3',
            "categoria_id" => 'required|digits_between:1,3',
            "precioProducto" => 'required|numeric',
            "descipcionProducto" => 'required|min:10',
            "sotckProducto" => 'required|numeric',
            "imageProdcuto" => 'required|image'
        ]);

        // tomamos el nombre que se cereo mediante el request
        $rutaImagen = $request['imageProdcuto']->store('upload-recetas','public');
        //rezise de la imagen
        $img = Image::make(public_path("storage/{$rutaImagen}"))->resize(300, 200);
       /*  $img = Image::make(public_path("storage/{$rutaImagen}"))->fit(1200,550); */
        $img->save();
        // se utiliza un facad para insertar en la base de datos
        DB::table('productos')->insert([
            "nombreProducto" => $data['nombreProducto'],
            "descipcionProducto" => $data['descipcionProducto'],
            "precioProducto" => $data['precioProducto'],
            "categoria_id" => $data['categoria_id'],
            "skuProducto" => $data['skuProducto'],
            "sotckProducto" => $data['sotckProducto'],
            "marca_id" => $data['marca_id'],
            "imageProdcuto" => $rutaImagen,
            "status"=>1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //redireccionar a la vista anterior
         return redirect()->route('producto.create')->with(['message'=>'Se ha agregado correctamente el producto']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $categorias = DB::table('categorias')->get()->pluck('nombreCatagoria','id');
        $marcas = DB::table('marcas')->get()->pluck('nombreMarca','id');
        $imagen = DB::table('imagens')
                            ->where('producto_id','=',$producto->id)              
                            ->get();
        
        return view('logeado.productos.verEditar',compact('producto','marcas','categorias','imagen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
      

       $data = $request->validate([
            "nombreProducto" => 'required|min:10|max:100',
            "skuProducto" => 'required|max:10',
            "marca_id" => 'required|digits_between:1,3',
            "categoria_id" => 'required|digits_between:1,3',
            "precioProducto" => 'required|numeric',
            "descipcionProducto" => 'required|min:10',
            "imageProdcuto" => 'image',
            "sotckProducto" => 'required|numeric'
        ]);

        $producto->nombreProducto = $data["nombreProducto"];
        $producto->skuProducto = $data["skuProducto"];
        $producto->marca_id = $data["marca_id"];
        $producto->categoria_id = $data["categoria_id"];
        $producto->precioProducto = $data["precioProducto"];
        $producto->descipcionProducto = $data["descipcionProducto"];
        $producto->sotckProducto = $data["sotckProducto"];

        if(request('imageProdcuto')){
            $rutaImagen = $request['imageProdcuto']->store('upload-recetas','public');
            //rezise de la imagen
            $img = Image::make(public_path("storage/{$rutaImagen}"))->resize(300, 200);

            $img->save();

            //asignamos la imagen
            $producto->imageProdcuto = $rutaImagen;
        }

        $producto->save();

        return redirect()->route('producto.edit',$producto->id)->with(['message'=>'Se ha Editado correctamente la Marca']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }


}
