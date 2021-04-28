@extends('adminlte::page')
@section('title', 'Marcas')
@section('css')
    
@endsection
<link rel="stylesheet" href="/css/mystyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.8.1/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" />
@section('content')

    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                EDITAR PRODUCTO 
            </div>
            <div class="card-body">
                <input type="text" id="totalImagen" value="{{ $count = count($imagen) }}">
                <form method="POST" action="{{ route('producto.update', ['producto'=>$producto->id ]) }}" enctype="multipart/form-data" novalidate>
                    <div class="modal-body">
                        @csrf

                      @method('PUT')
                        <div class="form-group">
                            <label for="recipient-name" class="text-left">Nombre Producto: </label>
                            <input type="text" name="nombreProducto" class="form-control @error('nombreProducto') is-invalid @enderror col-sm-12 col-md-12 col-lg-12" id="recipient-name" placeholder="nombre" value="{{ $producto->nombreProducto }}">
                            @error('nombreProducto')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputSku">SKU</label>
                                <input type="text" name="skuProducto" class="form-control  @error('skuProducto') is-invalid @enderror col-sm-12 col-md-12 col-lg-12" id="inputSku" placeholder="sku" value="{{ $producto->skuProducto }}">
                                @error('skuProducto')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputMarca">Marca</label>
                                <select name="marca_id" class="custom-select @error('marca_id') is-invalid @enderror " id="inputMarca">
                                    <option value="{{ $producto->categoria_id }}" selected>{{ $producto->marca->nombreMarca }}</option>
                                    @foreach ($marcas as $id=>$nombre)
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
                                    <option value="{{ $producto->categoria_id }}" selected>{{ $producto->categoria->nombreCatagoria }}</option>
                                    @foreach ($categorias as $id=>$nombre)
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
                                <input type="text" name="precioProducto" class="form-control  @error('precioProducto') is-invalid @enderror col-sm-12 col-md-12 col-lg-12" id="inputPrecio" placeholder="precio" value="{{ $producto->precioProducto }}">
                                    @error('precioProducto')
                                    <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Descripción:</label>
                            <textarea class="form-control @error('descipcionProducto') is-invalid @enderror" name="descipcionProducto" id="description" rows="3">{{ $producto->descipcionProducto }}</textarea>
                            @error('descipcionProducto')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputEmail4">Stock</label>
                                <input type="text" name="sotckProducto" class="form-control @error('sotckProducto') is-invalid @enderror" id="inputEmail4" placeholder="Email" value="{{ $producto->sotckProducto }}">
                                @error('sotckProducto')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                        
                            <div class="form-group col-md-5">                            
                                    <label for="inputEmail4">Imagenes</label>
                                    <div class="custom-file">
                                        <input type="file" name="imageProdcuto" class="custom-file-input  @error('imageProdcuto') is-invalid @enderror" id="inputGroupFile04" accept="image/*">
                                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                        @error('imageProdcuto')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror    
                                    </div>
                              
                                <div class="form-group col-md-12 mt-2" >
                                    <figure class="">
                                        <img src="/storage/{{ $producto->imageProdcuto }}" alt="imagen de imagen" >
                                    </figure>
                                    <figcaption>
                                        <h6 class="LogoLetras" style="font-size:small;  text-transform: uppercase;">vista principal</h6>
                                    </figcaption>
                                </div>
                            </div>
                            <div class="form-group col-md-4" id="galeriaImg">
                                <div class="row">
                                    @if ( $imagen->count())
                                       @foreach ($imagen as $imagenes)
                                       @php
                                       /* echo "<pre>";
                                        var_dump($imagenes);
                                        echo "</pre>"; */
                                       @endphp
                                       <figure class="conImagen">
                                            <img src="/storage/{{ $imagenes->rutaImagen}}" alt="{{  $imagenes->altImagen }}" id="mostrarImagenCArgada"> 
                                            <span class="fa fa-times-circle" aria-hidden="true" id="{{ $imagenes->id }}"></span>
                                       </figure>    
                                       @endforeach
                                       <div class="spinnerWhite"></div>
                                    @else
                                        <figure class="conImagen">
                                            <img src="/storage/upload-recetas/Z6t51xWvQvcPPRYS7wXrn4T13RDgZd9D3jNxq15h.jpg" alt="SIN IMAGEN" class="sinImagen">                                       
                                            <figcaption>
                                                <h6 class="LogoLetras" style="font-size:small;  text-transform: uppercase; color:red">sin imagen</h6>
                                            </figcaption>
                                        </figure>
                                    @endif
                                    {{-- <div class="row">
                                        <button type="button" class="btn btn-primary btn-lg btn-block mt-4" data-toggle="modal" id="btnEditarimag" data-target=".bd-example-modal-lg" style="display:none">editar</button>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    </div>
                </form>
                <div class="form-group col-md-4" id="btndiv">
                    <!-- Large modal -->
                    <button type="button" class="btn btn-primary btn-lg btn-block mt-4" id="btnaddimage" data-toggle="modal" data-target=".bd-example-modal-lg" >
                        <span id="showTotalImg"></span>
                    </button>
                    @include('logeado.productos.uploadImageModal')
                    @error('file')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
               
                @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
              @endif
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.8.1/min/dropzone.min.js" integrity="sha512-OTNPkaN+JCQg2dj6Ht+yuHRHDwsq1WYsU6H0jDYHou/2ZayS2KXCfL28s/p11L0+GSppfPOqwbda47Q97pDP9Q==" crossorigin="anonymous"></script>
    <script>
          
          var contarImage = $("#totalImagen").val();
          var maxPermitido = 8;
          var total = maxPermitido - contarImage;
            if(total == 8){  
                $("#btnaddimage").html("Agregar Imagenes "+contarImage+ " "+ total+"primero");} 
            else if(total > 0 && contarImage < 8){ 
                $("#btnEditarimag").css("display","block");
                $("#btnaddimage").html("Editar Imagenes "+contarImage+ " "+ total+"medio");}
            else if(total == 0){
                $("#btnaddimage").html("Editar Imagenes "+contarImage+ " "+ total+" sin hacer nada");}
            
          $("#showTotalImg").html(total);
          Dropzone.options.myAwesomeDropzone = {
            headers:{
                'X-CSRF-TOKEN':"{{ csrf_token() }}",
            },
           paramName: "rutaImagen", // The name that will be used to transfer the file
           dictDefaultMessage:"Arrastra has 8 imagenes al recuadro para subirlo",
           aceeptedFiles:"image/*",
            maxFilesize: 2, // MB
            maxFiles: total,
            acceptedFiles: "image/jpeg,png,PNG,Png,jpg"

        };
       
        
       
    </script>
    @endsection