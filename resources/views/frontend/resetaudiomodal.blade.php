
<!-- Modal -->
<div class="modal fade" id="resetAudioModal" tabindex="-1" role="dialog" aria-labelledby="resetAudioModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ __('Resetear') }} {{ __('Audios') }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('reset-audios') }}" method="POST">
            @csrf
            <div class="modal-body">
                {{ __('¿Está seguro de resetear los audios de este contenido?') }}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="course_id" value="{{ $course->id }}">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-undo-alt text-secondary mr-2"></i> Resetear</button>
            </div>
        </form>
      </div>
    </div>
  </div>


