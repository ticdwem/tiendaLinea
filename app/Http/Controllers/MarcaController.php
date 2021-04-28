<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarcaController extends Controller
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
        // mandamos a traer todos los registros de la base de datos
        $marcas = Marca::paginate(10);
        // mandamos los datos a la pantalla 
        return view('logeado.marca.index')->with('marcas',$marcas);
       
                
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
        // validamos el formulario 
        $data = $request->validate([
            'nombreMarca' => 'required|min:4',
            'descripcionMarca' => 'required'
        ]);
        // se utiliza un facad para insertar en la base de datos
        DB::table('marcas')->insert([
            'nombreMarca' => $data['nombreMarca'],
            'descripcionMarca' =>$data['descripcionMarca'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //redireccionar a la vista anterior
         return redirect()->route('marca.index')->with(['message'=>'Se ha agregado correctamente la Marca']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(Marca $marca)
    {
        $edit = Marca::all('nombreMarca','descripcionMarca');       
        return view('logeado.marca.edit',compact('edit','marca'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marca $marca)
    {
        // validamos el formulario 
        $data = $request->validate([
            'nombreMarca' => 'required|min:4',
            'descripcionMarca' => 'required'
        ]);

        $marca->nombreMarca = $data['nombreMarca']; 
        $marca->descripcionMarca = $data['descripcionMarca']; 

        $marca->save();

         //redireccionar a la vista anterior
         return redirect()->route('marca.index')->with(['message'=>'Se ha Editado correctamente la Marca']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        //
    }
}
