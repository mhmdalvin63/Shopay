@extends('layout.main')
@section('title', 'Show Data Petugas')
@section('content')
<style>
.title h1{
    font-weight: bold;
    font-family: monospace;
}
</style>
<div class="row d-flex justify-content-center">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 text-center title mb-5">
                                <h1>Data Petugas</h1>
                            </div>
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>ID</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $Petugas->id }}</h4></div>
                                </div>
                            </div>
                            <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>Nama Petugas</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $Petugas->nama_petugas }}</h4></div>
                                </div>
                            </div>
                            <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>Username</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $Petugas->username }}</h4></div>
                                </div>
                            </div>
                            <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>Password</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $Petugas->password }}</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('petugas_index') }}" class="btn btn-outline-warning btn-icon-text mt-4">                                                  
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection