@extends('layouts.admin')

@section('title', 'History')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <div class="section-header-breadcrumb justify-content-start">
          <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">History</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">History</h2>
        <a class="btn btn-primary" href="{{ route('history.create') }}">Add Content</a>
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
                      @foreach ($histories as $history)
                      <tr>
                        <td>
                          {{ $loop->iteration }}
                        </td>
                        <td>
                            <img alt="image" src="{{ Storage::url($history->image) }}" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                            {{-- {{ $history->image }} --}}
                        </td>
                        <td class="align-middle">
                          <p>{{ $history->title }}</p>
                        </td>
                        <td>
                            <p class="text">{{ $history->description }}</p>
                        </td>
                        <td class="text-center">
                          <a href="{{ route('history.edit', $history->id) }}" class="btn btn-primary">Edit</a>
                          <form action="{{ route('history.destroy', $history->id) }}" method="POST">
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