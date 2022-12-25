@extends('admin.pengumuman.layout.main')
@section('container')
    <div class="col-md-7 col-lg-8">
        <h4 class="my-3">Tambah Pengumuman</h4>
        <form class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-12">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title" value="" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" placeholder="Type" value="" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <h5 class="form-title">Category</h5>
                <div class="my-2">
                    <div class="form-check">
                        <input id="beasiswa" name="category_id" value="1" type="radio" class="form-check-input" checked required>
                        <label class="form-check-label" for="beasiswa">Beasiswa</label>
                    </div>
                    <div class="form-check">
                        <input id="dispensasi" name="category_id" value="2" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="dispensasi">Dispensasi</label>
                    </div>
                    <div class="form-check">
                        <input id="KIP" name="category_id" value="3" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="KIP">KIP</label>
                    </div>
                </div>

            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
    </div>
@endsection
