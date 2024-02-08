<!-- Delete Modal -->
<div class="modal fade" id="editModalDocument-{{ $document->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalDocument" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="editModalDocument"><i class="material-icons opacity-10">description</i> {{ __('Editar') }} {{ __('Documento') }}</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('update-document/'.$document->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body" align="center">
                <br>

                <div class="col-md-12 mb-3">
                    <label for="">{{ __('Nombre') }}</label>
                    <input type="text" class="form-control border px-2 " name="name" value="{{ $document->name }}" required>
                    @if ($errors->has('name'))
                        <span class="help-block opacity-7">
                                <strong>
                                    <font color="red">{{ $errors->first('name') }}</font>
                                </strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">{{ __('Descripción') }}</label>
                    <textarea name="description" cols="30" rows="5" class="form-control border px-2 ">{{ $document->description }}</textarea>
                    @if ($errors->has('description'))
                        <span class="help-block opacity-7">
                                <strong>
                                    <font color="red">{{ $errors->first('description') }}</font>
                                </strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">{{ __('Cambiar Documento') }}</label>
                    <input type="file" name="file_pdf" class="form-control border">
                    @if ($errors->has('file_pdf'))
                        <span class="help-block opacity-7">
                                <strong>
                                    <font color="red">{{ $errors->first('file_pdf') }}</font>
                                </strong>
                        </span>
                    @endif
                </div>

            </div>
            <div class="modal-footer">
                <input type="hidden" name="course_id" value="{{ $course->id }}">
                <button type="button" class="btn bg-gradient-info" data-bs-dismiss="modal"><i class="material-icons">close</i> {{ __('Cancelar') }}</button>
                <button type="submit" class="btn btn-success"><i class="material-icons">save</i> {{ __('Grabar') }}</button>
            </div>
        </form>
      </div>
    </div>
  </div>
