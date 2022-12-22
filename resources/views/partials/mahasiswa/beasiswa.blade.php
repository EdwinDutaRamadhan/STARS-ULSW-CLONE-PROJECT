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
                    <td><a href="{{ $d->link }}"><i class="btn btn-primary btn-sm bi bi-eye-fill"></i></a></td>
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
