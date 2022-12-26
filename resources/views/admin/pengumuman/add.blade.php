@extends('admin.pengumuman.layout.main')
@section('container')
    <div class="col-md-7 col-lg-8">
        <h4 class="my-3">Tambah Pengumuman</h4>
        <form class="needs-validation" action="{{ route('pengumuman.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title" value="" name="title" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="subtitle" class="form-label">Subtitle</label>
                    <input type="text" class="form-control" id="subtitle" placeholder="Subtitle" value="" name="subtitle" readonly>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                    
                </div>
                <div class="col-12">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" placeholder="Type" value="" name="type" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="my-2">
                    <label for="category" class="form-label">Type</label>
                    <select id="category" class="form-select" name="category_id">
                        @foreach ($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->category }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="my-2">
                    <label for="image" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="image" name="image">
                  </div>
                <div action="" class="my-2">
                    <input id="description" value="" type="hidden" name="description" required>
                    <trix-editor input="description"></trix-editor>
                </div>
                
                <button class="w-100 btn btn-primary btn" type="submit">Simpan</button>
        </form>
    </div>
    <script>
        const title = document.querySelector('#title');
        const subtitle = document.querySelector('#subtitle');
        title.addEventListener('keyup', function(){
            var result = title.value;
            result = result.toLowerCase();
            subtitle.value = result;
            console.log(result);
        })
    </script>
@endsection
