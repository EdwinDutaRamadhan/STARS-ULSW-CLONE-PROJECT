<!-- Modal -->
<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="profileLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-muted" id="profileLabel">Account form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="profileName">Nama</label>
                        <input type="text" name="name" id="profileName" class="form-control mt-2"
                            placeholder="Nama" value="">
                    </div>
                    <div class="mb-2">
                        <label for="profileEmail">Email</label>
                        <input type="email" name="email" id="profileEmail" class="form-control mt-2"
                            placeholder="Email" value="">
                    </div>
                    <div class="mb-2">
                        <label for="profileTelp">TLP</label>
                        <input type="text" name="telp" id="profileTelp" class="form-control mt-2"
                            placeholder="No.HP / TLP" value="">
                    </div>
                    <div class="row mb-2">
                        <div class="col-4">
                            <label for="profileBank">Bank</label>
                            <input type="text" name="bank" id="profileBank" class="form-control mt-2"
                                placeholder="Jenis Bank" value="">
                        </div>
                        <div class="col-8">
                            <label for="profileNorek">No. Rek</label>
                            <input type="text" name="norek" id="profileNorek" class="form-control mt-2"
                                placeholder="No. Rek" value="">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="profilePemilik">Nama Pemilik Rekening</label>
                        <input type="text" name="pemilik" id="profilePemilik" class="form-control mt-2"
                            placeholder="Nama Pemilik Rekening" value="">
                    </div>
                    <div class="mb-2">
                        <label for="profileProgdi">Program Studi</label>
                        <input type="text" name="progdi" id="profileProgdi" class="form-control mt-2"readonly value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>