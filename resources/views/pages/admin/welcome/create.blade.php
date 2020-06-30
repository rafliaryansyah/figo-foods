@extends('layouts.admin')

@section('title', 'Create Content')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <div class="section-header-breadcrumb justify-content-start">
          <div class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="{{ route('welcome.index') }}">Welcome</a></div>
          <div class="breadcrumb-item">Create Welcome Content</div>
        </div>
      </div>
    <div class="section-body">
        <h2 class="section-title">Add Content</h2>
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
              <form method="POST" action="{{ route('welcome.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image" value="{{ old('image') }}">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="valid-feedback">
                      Good job!
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control is-invalid" name="title" required value="{{ old('title') }}">
                    <div class="invalid-feedback">
                      Oh no! Title is so longer!
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <label>Description</label>
                    <textarea class="form-control is-invalid" name="description" required="">{{ old('description') }}</textarea>
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