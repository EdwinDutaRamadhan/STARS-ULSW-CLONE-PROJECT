<div class="m-2 table-responsive">
    <table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr class="text-center text-muted">
                <th>No</th>
                <th>#</th>
                <th>Dispensasi</th>
                <th>Syarat</th>
                <th>Tagihan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @if (count($data) > 0)
            <?php $no = ($data->currentpage()-1) * $data->perpage() ?>
            @foreach ($data as $d)
            <?php $no++; ?>
                <tr class="text-center text-muted">
                    <td>{{ $no }}</td>
                    <td><a href="#"><i class="btn btn-primary btn-sm bi bi-eye-fill"></i></a></td>
                    <td>{{ $d->dispensasi }}</td>
                    <td>{{ $d->syarat }}</td>
                    <td>{{ $d->tagihan }}</td>
                    <td>{{ $d->status }}</td>
                </tr>
            @endforeach
            @else
                <tr class="text-center text-muted">
                    <td colspan="6">No matching records found</td>
                </tr>
            @endif
        </tbody>
    </table>
    {{ $data->links() }}
</div>
