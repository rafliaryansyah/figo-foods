@extends('layouts.admin')

@section('title', 'Edit Content')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <div class="section-header-breadcrumb justify-content-start">
          <div class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="{{ route('choose.index') }}">Choose</a></div>
          <div class="breadcrumb-item">Edit choose content</div>
        </div>
      </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="section-body">
        <h2 class="section-title">Edit Content</h2>
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
              <form method="POST" action="{{ route('choose.update', $choose->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" name="image">
                        <label class="custom-file-label" for="customFile">{{ $choose->image }}</label>
                    </div>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="valid-feedback">
                      Good job!
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" required value="{{ $choose->title, old('title') }}">
                    <div class="invalid-feedback">
                      Oh no! Title is so longer!
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <label>Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" required="">{{ $choose->description, old('description') }}</textarea>
                    <div class="invalid-feedback">
                      Oh no! You entered an inappropriate word.
                    </div>
                  </div>
                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </div>
              </form>
            </div>
            </div>
    </div>
    </section>
</div>
@endsection

@push('addon-script')
    <script>
        $('.custom-file-input').on('change', function () {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        })
    </script>
@endpush