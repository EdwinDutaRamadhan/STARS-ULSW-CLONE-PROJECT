<!-- Modal -->
<div class="modal fade" id="profileDelete" tabindex="-1" aria-labelledby="profileLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-muted" id="profileDeleteLabel">Title</h5>
                <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <h3>Are you sure to remove it?</h3>
            </div>
            <div class="modal-footer modal-footer-mahasiswa">
                <form action="/admin/dashboard/mahasiswa/" method="post" id="deleteFormModal">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Remove</button>
                </form>
            </div>
        </div>
    </div>
</div>
