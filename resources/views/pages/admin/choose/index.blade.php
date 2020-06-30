@extends('layouts.admin')

@section('title', 'Choose')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <div class="section-header-breadcrumb justify-content-start">
          <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Choose</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Choose</h2>
        <a class="btn btn-primary" href="{{ route('choose.create') }}">Add Choose Content</a>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead class="text-center">                                 
                      <tr>
                        <th>
                          #
                        </th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>                                 
                      @foreach ($chooses as $choose)
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                            <img alt="image" src="{{ Storage::url($choose->image) }}" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                            {{-- {{ $choose->image }} --}}
                        </td>
                        <td class="align-middle">
                          <p>{{ $choose->title }}</p>
                        </td>
                        <td>
                            <p class="text">{{ $choose->description }}</p>
                        </td>
                        <td class="text-center">
                          <a href="{{ route('choose.edit', $choose->id) }}" class="btn btn-primary">Edit</a>
                          <form action="{{ route('choose.destroy', $choose->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                            <button class="btn btn-danger" type="">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection