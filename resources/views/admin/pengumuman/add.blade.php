@extends('admin.pengumuman.layout.main')
@section('container')
    <div class="col-md-7 col-lg-8">
        <div class="d-flex justify-content-between mt-2">
            <a class="text-decoration-none text-dark" href="{{ route('pengumuman.index') }}"><i class="bi bi-box-arrow-in-left"></i>Back</a>
            <h4 class="">Tambah Pengumuman</h4>
            <p></p>
        </div>
        <form class="needs-validation" action="{{ route('pengumuman.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        placeholder="Title" value="{{ old('title') }}" name="title" required>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="subtitle" class="form-label">Subtitle</label>
                    <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle"
                        placeholder="Subtitle" value="{{ old('subtitle') }}" name="subtitle" readonly>
                    @error('subtitle')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                        placeholder="Type" value="{{ old('type') }}" name="type" required>
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="my-2">
                    <label for="category" class="form-label">Category</label>
                    <select id="category" class="form-select @error('category_id') is-invalid @enderror"
                        name="category_id">
                        @foreach ($categories as $c)
                            @if (old('category_id') == $c->id)
                                <option value="{{ $c->id }}" selected>{{ $c->category }}</option>
                            @else
                                <option value="{{ $c->id }}">{{ $c->category }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="my-2">
                    <img class="img-fluid w-25 d-flex" id="imagePreview">
                    <label for="image-file" class="form-label">Pengumuman image file</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="imageFile" name="image" >
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div action="" class="my-2">
                    <input id="description" value="{{ old('description') }}" type="hidden" name="description" required>
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
        title.addEventListener('keyup', function() {
            var result = title.value;
            result = result.toLowerCase();
            subtitle.value = result;
            console.log(result);
        })
    </script>
@endsection
