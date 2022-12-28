<div class="m-2 table-responsive">
    <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr class="text-center text-muted">
                <th>No</th>
                <th>#</th>
                <th>Catatan</th>
                <th>Valid</th>
                <th>Poin</th>
                <th>Nama Kegiatan</th>
                <th>Rumpun</th>
                <th>Nama Jenis Rumpun</th>
                <th><div class="hideextra">Kelompok Kegiatan</div></th>
            </tr>
        </thead>
        <tbody>
            <?php $no = ($data->currentpage()-1) * $data->perpage() ?>
            @foreach ($data as $d)
            <?php $no++; ?>
                <tr class="text-center text-muted">
                    <td>{{ $no }}</td>
                    <td><a href="{{ $d->link }}" target="_blank"><i class="btn btn-primary btn-sm bi bi-eye-fill"></i></a></td>
                    <td>{{ $d->catatan }}</td>
                    <td>{{ ($d->valid == 1)? "Valid" : "Invalid"; }}</td>
                    <td>{{ $d->poin }}</td>
                    <td><div class="hideextra">{{ $d->kegiatan }}</div></td>
                    <td><div class="hideextra">{{ $d->rumpun }}</div></td>
                    <td><div class="hideextra">{{ $d->jenis }}</div></td>
                    <td><div class="hideextra">{{ $d->kelompok }}</div></td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
