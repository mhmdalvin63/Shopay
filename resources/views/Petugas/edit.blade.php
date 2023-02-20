@extends('layout.main')
@section('title','Edit Data Petugas')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('petugas_update', $Petugas->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
              <div class="form-group">
                <label for="exampleInputUsername1">Username :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Username Petugas..." name="username" value="{{ $Petugas->username }}" >
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Password :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Password..." name="password" value="{{ $Petugas->password }}">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Nama Petugas :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nama Petugas..." name="nama_petugas" value="{{ $Petugas->nama_petugas }}">
              </div>
              <a href="{{ route('petugas_index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                Cancel
              </a>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection