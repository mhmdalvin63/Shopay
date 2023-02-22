@extends('layout.main')
@section('title','Data Siswa')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="card-title">
            <a href="{{ route('siswa_create') }}" class="btn btn-outline-danger btn-icon-text" >
                <i class="mdi mdi-upload btn-icon-prepend"></i>                                                    
                Upload
            </a>
        </div>
        <div class="table-responsive text-center">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>NISN</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Tahun</th>
                <th>SPP</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->nisn}}</td>
                  <td>{{$item->nis}}</td>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->kelas->nama_kelas}}</td>
                  <td>{{$item->alamat}}</td>
                  <td>{{$item->no_telp}}</td>
                  <td>{{$item->spps->tahun}}</td>
                  <td>{{number_format($item->spps->nominal, 0,",",".")}}</td>
                  <td class="d-flex gap-3 justify-content-center">
                    <a href="{{ route('siswa_show', $item->id )}}" class="btn btn-outline-primary btn-icon-text">
                        Lihat
                      </a>
                    <a href="{{ route('siswa_edit', $item->id )}}" class="btn btn-outline-success btn-icon-text" >
                        Edit                        
                    </a>
                    <form action="{{ route('siswa_delete', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-icon-text">Hapus</button>
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
@endsection