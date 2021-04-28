@extends('adminlte::page')
@section('title', 'Categoria')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
  <div class="container">
    <h3>ADMINISTRAR PRODUCTOS</h3>
    <div class="addSometings mb-3">
      <a class="btn btn-primary btn-lg" href="{{ route('producto.create') }}">Agregar Producto</a>
    </div>
    @if(session('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
    @endif
    <div class="card">
        <div class="card-body">        
            <div class="row table-responsive">
                <table class="table table-striped table-bordered table-sm" id="Productos">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center;">#</th>
                            <th scope="col" style="text-align: center;">Nombre</th>
                            <th scope="col" style="text-align: center;">Descripción</th>
                            <th scope="col" style="text-align: center;">Precio</th>
                            <th scope="col" style="text-align: center;">Categoría</th>
                            <th scope="col" style="text-align: center;">Marca</th>
                            <th scope="col" style="text-align: center;">Stock</th>
                            <th scope="col" style="text-align: center;">&nbsp;</th>
                        </tr>
                    </thead>
{{--                     <tbody>
                        @php $numerico = 1 @endphp
                        @foreach ($producto as $pr )
                            <tr> 
                            <th scope="row" style="text-align: center;">
                                {{ $numerico++}}
                            </th>
                            <td style="text-align: center;">
                                {{ $pr->nombreProducto }}
                            </td>
                            <td style="text-align: center;">
                                {{ $pr->descipcionProducto }}
                            </td>
                            <td style="text-align: center;">
                                ${{ $pr->precioProducto }}
                            </td>
                            <td style="text-align: center;">
                                {{ $pr->categoria->nombreCatagoria }}
                            </td>
                            <td style="text-align: center;">
                                {{ $pr->marca->nombreMarca }}
                            </td>
                            <td style="text-align: center;">
                                <a href="{{ route('categoria.edit',[$pr->id]) }}" class="btn btn-primary">Editar</a>
                            </td>
                            </tr>               
                        @endforeach      
                    </tbody> --}}
                </table> 
            </div>
        </div>
    </div>
  </div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>

    <script>
        $('#Productos').DataTable(
            {
                "ajax":"{{ route('ajax.datatable') }}",
                "columns":[
                    {data: 'id'},
                    {data: 'nombreProducto'},
                    {data: 'descipcionProducto'},
                    {data: 'precioProducto'},
                    {data: 'nombreCatagoria'},
                    {data: 'nombreMarca'},
                    {data: 'sotckProducto'},
                    {data: 'btn'}
                ],
                responsive:true,
                autoWidth:false
                
            }
        );
    </script>
@endsection