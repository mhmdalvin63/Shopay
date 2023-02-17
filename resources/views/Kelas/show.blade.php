@extends('layout.main')
@section('title', 'Show Data Kelas')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Judul Notifikasi</label>
                            <input type="text" disabled name="nama_kelas" value="{{ $Kelas->nama_kelas }}" class="form-control" placeholder="Nama Kelas">
                            <span class="text-danger">@error('nama_kelas'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Keterangan</label>
                          <textarea disabled name="kompetensi_keahlian" class="form-control h-150px" rows="6" id="comment" placeholder="kompetensi_keahlian">{{ $Kelas->kompetensi_keahlian }}</textarea>
                          <span class="text-danger">@error('kompetensi_keahlian'){{ $message }}@enderror</span>
                        </div>
                        <a href="{{ route('kelas_index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection