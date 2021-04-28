<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Categoría</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('categoria.store') }}" novalidate>
        <div class="modal-body">
            @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nueva Categoría:</label>
              <input type="text" name="nombreCatagoria" class="form-control @error('nombreCatagoria') is-invalid @enderror" id="recipient-name" value="{{ old('nombreCatagoria') }}">
              @error('nombreCatagoria')
                  <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="description" class="col-form-label">Descripción:</label>
              <textarea class="form-control @error('descripcionCategoria') is_invalid @enderror" name="descripcionCategoria" id="description" rows="3">{{ old('descripcionCategoria') }}</textarea>
              @error('descripcionCategoria')
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