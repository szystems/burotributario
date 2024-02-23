<!-- Modal PDF-->
<div class="modal fade" id="pdfModal-{{ $document->id }}" tabindex="-1" aria-labelledby="pdfModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModal">Ver PDF</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="pdf-container" style="height: calc(100vh - 250px);"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cerrar') }}</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.6/pdfobject.min.js"></script>
<script>
PDFObject.embed("{{ asset('assets/uploads/pdfs/'.$document->file_pdf.'#zoom=100&toolbar=0&navpanes=0&scrollbar=0') }}", "#pdf-container");
</script>
