@extends('layout.main')
@section('title','Edit Data Siswa')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('siswa_update', $siswa->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
              <label for="exampleInputUsername1">NISN :</label>
              <input type="number" class="form-control" id="exampleInputUsername1" placeholder="Masukkan NISN..." name="nisn" value="{{ $siswa->nisn }}">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">NIS :</label>
              <input type="number" class="form-control" id="exampleInputUsername1" placeholder="Masukkan NIS..." name="nis" value="{{ $siswa->nis }}">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Nama Lengkap :</label>
              <input type="text" class="form-control" id="exampleInputUsername1" name="nama" value="{{$siswa->nama }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Kelas :</label>
              <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_kelas" value="{{ $siswa->id_kelas }}">
                @foreach ($kelas as $item)
                <option value="{{ $item->id}}">{{ $item->nama_kelas}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Alamat :</label>
              <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Masukkan Alamat Lengkap..." name="alamat">{{$siswa->alamat }}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Nomor Telepon :</label>
              <input type="number" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nomor Telepon..." name="no_telp" value="{{ $siswa->no_telp }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Tahun :</label>
              <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_spp" value="{{ $siswa->id_spp }}">
                @foreach ($spp as $item)
                <option value="{{ $item->id}}">{{ $item->tahun }} {{ $item->nominal}}</option>
                @endforeach
              </select>
            </div>
              <a href="{{ route('siswa_index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                Cancel
              </a>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection