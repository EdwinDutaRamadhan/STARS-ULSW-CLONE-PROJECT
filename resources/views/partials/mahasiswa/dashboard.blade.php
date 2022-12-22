<div class="row p-2">
    <div class="col-md-3">
        <div class="card bg-primary">
            <div class="card-body text-succes">
                <p style="font-size: 48px;" class="card-title text-light text-end">{{ $kegiatan }}</p>
                <p class="card-title text-light text-end">Kegiatan</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-info ">
            <div class="card-body text-succes">
                <p style="font-size: 48px;" class="card-title text-light text-end">{{ $dispensasi }}</p>
                <p class="card-title text-light text-end">Dispensasi</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-secondary">
            <div class="card-body text-succes">
                <p style="font-size: 48px;" class="card-title text-light text-end">{{ $beasiswa }}</p>
                <p class="card-title text-light text-end">Beasiswa</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-warning">
            <div class="card-body text-succes">
                <p style="font-size: 48px;" class="card-title text-light text-end">{{ $pkm }}</p>
                <p class="card-title text-light text-end">PKM</p>
            </div>
        </div>
    </div>
</div>
<div class="card container">
    <h5 class="text-muted">Poin KKM</h5>
    <table class="table">
        <tr>
            <th>Rumpun</th>
            <th>Min. Poin</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>OMB</td>
            <td>150</td>
            <td>{{ $OMB }}</td>
        </tr>
        <tr>
            <td>Keterampilan Profesional</td>
            <td>300</td>
            <td>0</td>
        </tr>
        <tr>
            <td>Keterampilan Bersifat Kemanusiaan</td>
            <td>250</td>
            <td>0</td>
        </tr>
        <tr>
            <td>Keterampilan Penunjang</td>
            <td>0</td>
            <td>0</td>
        </tr>
    </table>
</div>