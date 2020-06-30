@extends('layouts.admin')

@section('title', 'Create Content')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <div class="section-header-breadcrumb justify-content-start">
          <div class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="{{ route('history.index') }}">History</a></div>
          <div class="breadcrumb-item">Create history content</div>
        </div>
      </div>
    <div class="section-body">
        <h2 class="section-title">Add Content</h2>
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
              <form method="POST" action="{{ route('history.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" name="image">
                        <label class="custom-file-label @error('image') @enderror" for="customFile">Choose file</label>
                    </div>
                    @error('image')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                    @error('title')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group mb-0">
                    <label>Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
                    @error('description')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
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