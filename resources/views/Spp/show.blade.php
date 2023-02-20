@extends('layout.main')
@section('title', 'Show Data Spp')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Tahun :</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Tahun..." name="tahun" value="{{ $spp->tahun }}" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputUsername1">Nominal :</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nominal..." name="nominal" value="{{ $spp->nominal }}">
                          </div>
                        <a href="{{ route('spp_index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection