@extends('adminlte::page')
@section('title', 'Categoria')

@section('content')
  <div class="container">
    <h3>ADMINISTRAR CATEGORÍA</h3>
    <div class="addSometings mb-3">
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#createModal">Agregar categoría</button>
    </div>
    @include('logeado.categoria.createCategoriaModal')
    @if(session('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
    @endif
    <div class="row table-responsive">
      <table class="table table-striped table-bordered table-sm">
        <thead>
          <tr>
            <th scope="col" style="text-align: center;">#</th>
            <th scope="col" style="text-align: center;">Marca</th>
            <th scope="col" style="text-align: center;">Fecha Creación</th>
            <th scope="col" style="text-align: center;">actualizar</th>
          </tr>
        </thead>
        <tbody>
         @php $numerico = 1 @endphp
          @foreach ($categoria as $idcat )
            <tr> 
              <th scope="row" style="text-align: center;">
                {{ $numerico++}}
              </th>
              <td style="text-align: center;">
                {{ $idcat->nombreCatagoria }}
              </td>
              <td style="text-align: center;">
                {{ $idcat->created_at }}
              </td>
              <td style="text-align: center;">
                <a href="{{ route('categoria.edit',[$idcat->id]) }}" class="btn btn-primary">Editar</a>
              </td>
            </tr>               
          @endforeach      
        </tbody>
      </table>
      {{ $categoria->links() }}
   
    </div>
  </div>
@endsection