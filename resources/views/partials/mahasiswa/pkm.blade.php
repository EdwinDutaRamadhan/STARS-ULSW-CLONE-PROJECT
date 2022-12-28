<div class="m-2 table-responsive">
    <table class="table table-striped table-bordered table-sm" cellspacing="0">
        <thead>
            <tr class="text-center text-muted">
                <th>No</th>
                <th>#</th>
                <th>Revisi</th>
                <th><div class="hideextra">Valid. Pembimbing</div></th>
                <th><div class="hideextra">Valid. KorBidKem</div></th>
                <th>ID</th>
                <th>Judul</th>
                <th>Kegiatan</th>
                <th>Skema</th>
                <th>Administratif</th>
                <th>Substantif</th>
                <th>Progdi</th>
                <th>Status</th>
                <th>Pembimbing</th>
                <th>Ketua</th>
                <th><div class="hideextra">Anggota 1</div></th>
                <th><div class="hideextra">Anggota 2</div></th>
                <th><div class="hideextra">Anggota 3</div></th>
                <th><div class="hideextra">Anggota 4</div></th>
                <th>Proposal</th>
                <th><div class="hideextra">Berkas PKM</div></th>
            </tr>
        </thead>
        <tbody>
            @if (count($data) > 0)
            <?php $no = ($data->currentpage()-1) * $data->perpage() ?>
            @foreach ($data as $d)
            <?php $no++; ?>
                <tr class="text-center text-muted">
                    <td>{{ $no }}</td>
                    <td><a href="{{ $d->link }}"><i class="btn btn-primary btn-sm bi bi-eye-fill"></i></a></td>
                    <td>{{ $d->revisi }}</td>
                    <td>{{ ($d->validpembimbing == 1)? "Valid" : "Invalid"; }}</td>
                    <td>{{ ($d->validkorbidkem == 1)? "Valid" : "Invalid"; }}</td>
                    <td>{{ $d->idberkas }}</td>
                    <td>{{ $d->judul }}</td>
                    <td>{{ $d->kegiatan }}</td>
                    <td>{{ $d->skema }}</td>
                    <td>{{ $d->administratif }}</td>
                    <td>{{ $d->substantif }}</td>
                    <td>{{ $d->progdi }}</td>
                    <td>{{ $d->status }}</td>
                    <td>{{ $d->pembimbing }}</td>
                    <td>{{ $d->ketua }}</td>
                    <td>{{ $d->anggota1 }}</td>
                    <td>{{ $d->anggota2 }}</td>
                    <td>{{ $d->anggota3 }}</td>
                    <td>{{ $d->anggota4 }}</td>
                    <td>{{ $d->proposal }}</td>
                    <td>{{ $d->berkas }}</td>
                </tr>
                @endforeach
            @else
                <tr class="text-center text-muted">
                    <td colspan="20">No matching records found</td>
                </tr>
            @endif
        </tbody>
    </table>
    {{ $data->links() }}
</div>
