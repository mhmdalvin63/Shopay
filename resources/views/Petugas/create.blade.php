@extends('layout.main')
@section('title','Tambah Data Petugas')
@section('content')
<div class="row d-flex" style="justify-content: center;">

    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body p-5">
          <h4 class="card-title">Horizontal Form</h4>
          <form action="{{ route('petugas_store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username :</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Username Petugas..." name="username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Password :</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Password..." name="password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Petugas :</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nama Petugas..." name="nama_petugas">
                    </div>
                    <div class="modal-footer">
                          <a href="{{ route('petugas_index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                          Cancel
                        </a>
                          <button type="submit" class="btn btn-outline-primary btn-icon-text">
                          Submit
                        </button>
                    </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection