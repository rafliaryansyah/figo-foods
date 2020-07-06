@extends('layouts.admin')

@section('title', 'Welcome')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <div class="section-header-breadcrumb justify-content-start">
          <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Welcome</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Welcome</h2>
        <a class="btn btn-primary" href="{{ route('welcome.create') }}">Add Content</a>
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
                      @foreach ($welcomes as $welcome)
                      <tr>
                        <td>
                          {{ $loop->iteration }}
                        </td>
                        <td>
                          <img alt="image" src="{{ Storage::url($welcome->image) }}" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                        </td>
                        <td class="align-middle">
                          {{ $welcome->title }}
                        </td>
                        <td>
                          {{ $welcome->description }}
                        </td>
                        <td class="text-center">
                          <a href="{{ route('welcome.edit', $welcome->id) }}" class="btn btn-primary">Edit</a>
                          <form action="{{ route('welcome.destroy', $welcome->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
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
@endsection