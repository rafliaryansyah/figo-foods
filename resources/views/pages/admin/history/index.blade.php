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
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                            <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                        </td>
                        <td class="align-middle">
                          <p>Anda meme sekali</p>
                        </td>
                        <td>
                            <p class="text">Lorem ipsum dolor sit amet. Asadsasda sass</p>
                        </td>
                        <td class="text-center">
                          <button class="btn btn-primary">Detail</button>
                          <button class="btn btn-danger">Delete</button>
                        </td>
                      </tr>
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