@extends('layout.main')
@section('title','Data Kelas')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @if(auth()->user()->level == "admin")
          <div class="card-title">
              <a href="{{ route('kelas_create') }}" class="btn btn-outline-danger btn-icon-text" >
                  <i class="mdi mdi-upload btn-icon-prepend"></i>                                                    
                  Upload
              </a>
          </div>
        @endif
        <div class="table-responsive text-center">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Kelas</th>
                <th>Kompetensi Keahlian</th>
                @if(auth()->user()->level == "admin")
                <th>Aksi</th>
                @endif
              </tr>
            </thead>
            <tbody>
                @foreach ($Kelas as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->nama_kelas}}</td>
                  <td>{{$item->kompetensi_keahlian}}</td>
                  @if(auth()->user()->level == "admin")
                  <td class="d-flex gap-3 justify-content-center">
                    <a href="{{ route('kelas_show', $item->id )}}" class="btn btn-outline-primary btn-icon-text">
                        Lihat
                      </a>
                    <a href="{{ route('kelas_edit', $item->id )}}" class="btn btn-outline-success btn-icon-text" >
                        Edit                        
                    </a>
                    <form action="{{ route('kelas_delete', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-icon-text">Hapus</button>
                    </form>
                  </td>
                  @endif
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection