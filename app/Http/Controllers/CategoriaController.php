<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class CategoriaController extends Controller
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
        $cat = Categoria::paginate(10);

        return view('logeado.categoria.index')->with('categoria', $cat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $request->validate([
        'nombreCatagoria' => 'Required|min:4',
        'descripcionCategoria' => 'required'
       ]);

       DB::table('categorias')->insert([
        'nombreCatagoria' => $data['nombreCatagoria'],
        'descripcionCategoria' => $data['descripcionCategoria'],
        'created_at' => now()
       ]);

       return redirect()->route('categoria.index')->with(['message'=>'Se ha agregado correctamente la Marca']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        $edit = Categoria::all('nombreCatagoria','created_at');       
        return view('logeado.Categoria.edit',compact('edit','categoria'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $data = $request->validate([
            'nombreCatagoria' => 'Required|min:4',
            'descripcionCategoria' => 'required'
           ]);

           $categoria->nombreCatagoria = $data['nombreCatagoria'];
           $categoria->descripcionCategoria = $data['descripcionCategoria'];

           return redirect()->route('categoria.index')->with(['message'=>'Se ha Editado correctamente la Marca']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
