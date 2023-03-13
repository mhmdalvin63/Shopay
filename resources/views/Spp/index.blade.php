@extends('layout.main')
@section('title','Data SPP')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @if(auth()->user()->level == "admin")
        <div class="card-title">
            <a href="{{ route('spp_create') }}" class="btn btn-outline-danger btn-icon-text" >
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
                <th>Tahun</th>
                <th>Nominal</th>
                @if(auth()->user()->level == "admin")
                <th>Aksi</th>
                @endif
              </tr>
            </thead>
            <tbody>
                @foreach ($spp as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->tahun}}</td>
                  <td>Rp. {{ number_format($item->nominal, 0,",",".") }}</td>
                  @if(auth()->user()->level == "admin")
                  <td class="d-flex gap-3 justify-content-center">
                    <a href="{{ route('spp_show', $item->id )}}" class="btn btn-outline-primary btn-icon-text">
                        Lihat
                      </a>
                    <a href="{{ route('spp_edit', $item->id )}}" class="btn btn-outline-success btn-icon-text" >
                        Edit                        
                    </a>
                    <form action="{{ route('spp_delete', $item->id) }}" method="POST">
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