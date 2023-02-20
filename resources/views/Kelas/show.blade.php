@extends('layout.main')
@section('title', 'Show Data Kelas')
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 text-center title mb-5">
                                <h1>Data Kelas</h1>
                            </div>
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>ID</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $Kelas->id }}</h4></div>
                                </div>
                            </div>
                            <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>Nama Kelas</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $Kelas->nama_kelas }}</h4></div>
                                </div>
                            </div>
                            <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>Kompetensi Keahlian</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $Kelas->kompetensi_keahlian }}</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('kelas_index') }}" class="btn btn-outline-warning btn-icon-text mt-4">                                                  
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection