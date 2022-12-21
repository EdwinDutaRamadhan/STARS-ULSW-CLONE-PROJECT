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
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control mt-2"
                            placeholder="Nama" value="{{ $profile->name }}">
                    </div>
                    <div class="mb-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control mt-2"
                            placeholder="Email" value="{{ $profile->email }}">
                    </div>
                    <div class="mb-2">
                        <label for="telp">TLP</label>
                        <input type="text" name="telp" id="telp" class="form-control mt-2"
                            placeholder="No.HP / TLP" value="{{ $profile->telp }}">
                    </div>
                    <div class="row mb-2">
                        <div class="col-4">
                            <label for="bank">Bank</label>
                            <input type="text" name="bank" id="bank" class="form-control mt-2"
                                placeholder="Jenis Bank" value="{{ $profile->bank }}">
                        </div>
                        <div class="col-8">
                            <label for="norek">No. Rek</label>
                            <input type="text" name="norek" id="norek" class="form-control mt-2"
                                placeholder="No. Rek" value="{{ $profile->norek }}">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="pemilik">Nama Pemilik Rekening</label>
                        <input type="text" name="pemilik" id="pemilik" class="form-control mt-2"
                            placeholder="Nama Pemilik Rekening" value="{{ $profile->pemilik }}">
                    </div>
                    <div class="mb-2">
                        <label for="progdi">Program Studi</label>
                        <input type="text" name="progdi" id="progdi" class="form-control mt-2"readonly value="{{ $profile->progdi }}">
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