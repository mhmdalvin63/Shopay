@extends('layout.main')
@section('title','Edit Data Kelas')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('kelas_update', $Kelas->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputUsername1">Nama Kelas :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nama Kelas..." name="nama_kelas"  value="{{ $Kelas->nama_kelas }}" >
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Kompetensi Keahlian :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Kompetensi Keahlian..." name="kompetensi_keahlian"  value="{{ $Kelas->kompetensi_keahlian }}" >
              </div>
              <a href="{{ route('kelas_index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                Cancel
              </a>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection