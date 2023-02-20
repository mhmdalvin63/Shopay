@extends('layout.main')
@section('title', 'Show Data Spp')
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 text-center title mb-5">
                                <h1>Data SPP</h1>
                            </div>
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>ID</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $spp->id }}</h4></div>
                                </div>
                            </div>
                            <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>Tahun</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $spp->tahun }}</h4></div>
                                </div>
                            </div>
                            <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>Nominal</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>Rp. {{ number_format($spp->nominal, 0,",",".") }}</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('spp_index') }}" class="btn btn-outline-warning btn-icon-text mt-4">                                                  
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection