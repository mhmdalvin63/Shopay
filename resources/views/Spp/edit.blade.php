@extends('layout.main')
@section('title','Edit Data Spp')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('spp_update', $spp->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
              <div class="form-group">
                <label for="exampleInputUsername1">Tahun :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Tahun..." name="tahun" value="{{ $spp->tahun }}" >
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Nominal :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nominal..." name="nominal" value="{{ $spp->nominal }}">
              </div>
              <a href="{{ route('spp_index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                Cancel
              </a>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection