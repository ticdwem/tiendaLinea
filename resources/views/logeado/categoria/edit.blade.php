@extends('adminlte::page')
@section('title', 'Marcas')

@section('content')
  <div class="container">
    <div class="card text-center">
        <div class="card-header">
          Editar 
        </div>
        <div class="card-body">

        <form method="POST" action="{{ route('categoria.store') }}" novalidate>
        <div class="modal-body">
            @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nueva Categoría:</label>
              <input type="text" name="nombreCatagoria" class="form-control @error('nombreCatagoria') is-invalid @enderror" id="recipient-name" value="{{ $categoria->nombreCatagoria }}">
              @error('nombreCatagoria')
                  <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="description" class="col-form-label">Descripción:</label>
              <textarea class="form-control @error('descripcionCategoria') is_invalid @enderror" name="descripcionCategoria" id="description" rows="3">{{ $categoria->descripcionCategoria }}</textarea>
              @error('descripcionCategoria')
                  <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="modal-footer">
            <a href="{{ route('categoria.index') }}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary">Aceptar</button>
          </div>
        </form>
      </div>
      </div>
  </div>
@endsection