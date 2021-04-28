@extends('adminlte::page')
@section('title', 'Marcas')

@section('content')
  <div class="container">
    <div class="card text-center">
        <div class="card-header">
          Editar 
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('marca.update', ['marca'=>$marca->id]) }}" novalidate>
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Editar Marca:</label>
                      <input type="text" name="nombreMarca" class="form-control @error('nombreMarca') is-invalid @enderror" id="recipient-name" value="{{ $marca->nombreMarca }}">
                      @error('nombreMarca')
                          <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="description" class="col-form-label">Descripción:</label>
                      <textarea class="form-control @error('descripcionMarca') is_invalid @enderror" name="descripcionMarca" id="description" rows="3">{{ $marca->descripcionMarca }}</textarea>
                      @error('descripcionMarca')
                          <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                  </div>
                </form>
        </div>
      </div>
  </div>
@endsection