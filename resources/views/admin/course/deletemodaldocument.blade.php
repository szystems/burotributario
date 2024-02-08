<!-- Delete Modal -->
<div class="modal fade" id="deleteModalDocument-{{ $document->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalDocument" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="deleteModalDocument">{{ __('Eliminar') }} {{ __('Documento') }}</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {{ __('¿Está seguro de eliminar este documento?') }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-info" data-bs-dismiss="modal"><i class="material-icons">close</i> {{ __('Cancelar') }}</button>
          <a href="{{ url('delete-document/'.$document->id) }}" type="button" class="btn bg-gradient-danger"><i class="material-icons">delete</i> {{ __('Eliminar') }}</a>
        </div>
      </div>
    </div>
  </div>
