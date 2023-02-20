@extends('layout.main')
@section('title','Data Petugas')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="card-title">
            <a href="{{ route('petugas_create') }}" class="btn btn-outline-danger btn-icon-text" >
                <i class="mdi mdi-upload btn-icon-prepend"></i>                                                    
                Upload
            </a>
        </div>
        <div class="table-responsive text-center">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama Petugas</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($Petugas as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->username}}</td>
                  <td>{{$item->password}}</td>
                  <td>{{$item->nama_petugas}}</td>
                  <td class="d-flex gap-3 justify-content-center">
                    <a href="{{ route('petugas_show', $item->id )}}" class="btn btn-outline-primary btn-icon-text">
                        Lihat
                      </a>
                    <a href="{{ route('petugas_edit', $item->id )}}" class="btn btn-outline-success btn-icon-text" >
                        Edit                        
                    </a>
                    <form action="{{ route('petugas_delete', $item->id) }}" method="POST">
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