<!-- Modal PDF-->
<div class="modal fade" id="pdfModal-{{ $document->id }}" tabindex="-1" aria-labelledby="pdfModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModal">Ver PDF</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <embed src="{{ asset('assets/uploads/pdfs/'.$document->file_pdf) }}#zoom=100" frameborder="0" width="100%" height="600px">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cerrar') }}</button>
            </div>
        </div>
    </div>
</div>
