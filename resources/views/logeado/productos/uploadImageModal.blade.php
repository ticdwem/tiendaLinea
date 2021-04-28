<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="row">
          <div class="col">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h1>Subir Imagenes</h1>
                <form action="{{ route('imagen.store') }}" method="POST" class="dropzone" id="my-awesome-dropzone">
                    <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                    <input type="hidden" name="altImagen" value="{{ $producto->nombreProducto }}">
              </form>
          </div>
      </div>
    </div>
  </div>
</div>
