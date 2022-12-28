<!-- Modal -->
<div class="modal fade" id="profileDetail" tabindex="-1" aria-labelledby="profileLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-muted" id="profileDetailLabel">Account form</h5>
                <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="profileDetailName">Nama</label>
                        <input type="text" name="name" id="profileDetailName" class="form-control mt-2"
                            placeholder="Nama" value="">
                    </div>
                    <div class="row mb-2">
                        <div class="col-6">
                            <label for="profileDetailEmail">Email</label>
                            <input type="email" name="email" id="profileDetailEmail" class="form-control mt-2"
                                placeholder="Email" value="">
                        </div>
                        <div class="col-6">
                            <label for="profileDetailNIM">NIM</label>
                            <input type="text" name="nim" id="profileDetailNIM" class="form-control mt-2"
                                placeholder="NIM" value="">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="profileDetailTelp">TLP</label>
                        <input type="text" name="telp" id="profileDetailTelp" class="form-control mt-2"
                            placeholder="No.HP / TLP" value="">
                    </div>
                    <div class="row mb-2">
                        <div class="col-4">
                            <label for="profileDetailBank">Bank</label>
                            <input type="text" name="bank" id="profileDetailBank" class="form-control mt-2"
                                placeholder="Jenis Bank" value="">
                        </div>
                        <div class="col-8">
                            <label for="profileDetailNorek">No. Rek</label>
                            <input type="text" name="norek" id="profileDetailNorek" class="form-control mt-2"
                                placeholder="No. Rek" value="">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="profileDetailPemilik">Nama Pemilik Rekening</label>
                        <input type="text" name="pemilik" id="profileDetailPemilik" class="form-control mt-2"
                            placeholder="Nama Pemilik Rekening" value="">
                    </div>
                    <div class="mb-2">
                        <label for="profileDetailProgdi">Program Studi</label>
                        <input type="text" name="progdi" id="profileDetailProgdi" class="form-control mt-2"readonly
                            value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer modal-footer-mahasiswa">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
