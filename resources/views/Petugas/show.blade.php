@extends('layout.main')
@section('title', 'Show Data Petugas')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="POST">
                        @csrf
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
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection