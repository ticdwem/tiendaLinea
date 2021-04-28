@extends('adminlte::page')
@section('title', 'Marcas')

@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                REGISTRAR NUEVO PRODUCTO 
            </div>
            @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
          @endif
            <div class="card-body">
                <form method="POST" action="{{ route('producto.store') }}" enctype="multipart/form-data"  novalidate>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="text-left">Nombre Producto: </label>
                            <input type="text" name="nombreProducto" class="form-control @error('nombreProducto') is-invalid @enderror col-sm-12 col-md-12 col-lg-12" id="recipient-name" placeholder="nombre" value="{{ old('nombreProducto') }}">
                            @error('nombreProducto')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputSku">SKU</label>
                                <input type="text" name="skuProducto" class="form-control  @error('skuProducto') is-invalid @enderror col-sm-12 col-md-12 col-lg-12" id="inputSku" placeholder="sku" value="{{ old('skuProducto') }}">
                                @error('skuProducto')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputMarca">Marca</label>
                                <select name="marca_id" class="custom-select @error('marca_id') is-invalid @enderror " id="inputMarca">
                                    <option selected>Elige una opción</option>
                                    @foreach ($marca as $id=>$nombre)
                                    <option value="{{ $id }}">{{ $nombre }}</option>
                                @endforeach
                                </select>
                                @error('marca_id')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCat">Categoría</label>
                                <select name="categoria_id" class="custom-select @error('categoria_id') is-invalid @enderror " id="inputCat">
                                    <option selected>Elige una opción</option>
                                    @foreach ($categoria as $id=>$nombre)
                                        <option value="{{ $id }}">{{ $nombre }}</option>
                                    @endforeach
                                </select>
                                @error('categoria_id')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                            <div class="form-group col-md-3">
                                <label for="inputPrecio">Precio</label>
                                <input type="text" name="precioProducto" class="form-control  @error('precioProducto') is-invalid @enderror col-sm-12 col-md-12 col-lg-12" id="inputPrecio" placeholder="precio" value="{{ old('precioProducto') }}">
                                    @error('precioProducto')
                                    <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Descripción:</label>
                            <textarea class="form-control @error('descipcionProducto') is-invalid @enderror" name="descipcionProducto" id="description" rows="3">{{ old('descipcionProducto') }}</textarea>
                            @error('descipcionProducto')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputEmail4">Stock</label>
                                <input type="text" name="sotckProducto" class="form-control @error('sotckProducto') is-invalid @enderror" id="inputEmail4" placeholder="Email" value="{{ old('sotckProducto') }}">
                                @error('sotckProducto')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                        
                            <div class="form-group col-md-9">                            
                                <label for="inputEmail4">Imagenes</label>
                                <div class="custom-file">
                                    <input type="file" name="imageProdcuto" class="custom-file-input  @error('imageProdcuto') is-invalid @enderror" id="inputGroupFile04">
                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                    @error('imageProdcuto')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection