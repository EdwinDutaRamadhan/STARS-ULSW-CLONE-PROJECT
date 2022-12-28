<div class="m-2 table-responsive">
    <table class="table table-striped table-bordered table-sm" cellspacing="0">
        <thead>
            <tr class="text-center text-muted">
                <th>No</th>
                <th>#</th>
                <th>Beasiswa</th>
                <th>Status</th>
                <th>Masa Aktif</th>
            </tr>
        </thead>
        <tbody>
            @if (count($data) > 0)
            <?php $no = ($data->currentpage()-1) * $data->perpage() ?>
            @foreach ($data as $d)
            <?php $no++; ?>
                <tr class="text-center text-muted">
                    <td>{{ $no }}</td>
                    <td>
                        <div class="btn-group dropend">
                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-gear-fill"></i>
                              <span class="visually-hidden">Toggle Dropright</span>
                            </button>
                            <ul class="dropdown-menu ">
                                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#uploadBerkas">Upload Berkas</button></li>
                                <li><button class="dropdown-item" >Detail Berkas</button></li>
                            </ul>
                          </div>
                    </td>
                    <td>{{ $d->beasiswa }}</td>
                    <td>{{ $d->status == 1 ? "Diterima" : "Pendaftaran"; }}</td>
                    <td>{{ $d->aktif }}</td>
                </tr>
                
            @endforeach
            @else
                <tr class="text-center text-muted">
                    <td colspan="5">No matching records found</td>
                </tr>
            @endif
        </tbody>
    </table>
    {{ $data->links() }}
</div>
<!-- Modal -->
<div class="modal fade" id="uploadBerkas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="uploadBerkasTitle">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

