@extends('admin.pengumuman.layout.main')
@section('container')
    <div class="col-md-7 col-lg-8">
        <h4 class="my-3">Tambah Pengumuman</h4>
        <form class="needs-validation" action="{{ route('pengumuman.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" value="" name="title" required>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="subtitle" class="form-label">Subtitle</label>
                    <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" placeholder="Subtitle" value="" name="subtitle" readonly>
                    @error('subtitle')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="Type" value="" name="type" required>
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="my-2">
                    <label for="category" class="form-label">Category</label>
                    <select id="category" class="form-select @error('category_id') is-invalid @enderror" name="category_id">
                        @foreach ($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->category }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="my-2">
                    <label for="image" class="form-label">Default file input example</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                <div action="" class="my-2">
                    <input id="description" value="" type="hidden" name="description" required>
                    <trix-editor input="description"></trix-editor>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <button class="w-100 btn btn-primary btn mb-4" type="submit">Simpan</button>
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
