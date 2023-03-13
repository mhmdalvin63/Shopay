@extends('layout.main')
@section('title', 'Show Data Siswa')
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
                                <h1>Data Siswa</h1>
                            </div>
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>ID</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $Pembayaran->id }}</h4></div>
                                </div>
                            </div>
                            <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>NISN</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $Pembayaran->nisn }}</h4></div>
                                </div>
                            </div>
                            <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>NIS</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $Pembayaran->nis }}</h4></div>
                                </div>
                            </div>
                            <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>Nama</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $Pembayaran->nama }}</h4></div>
                                </div>
                            </div>
                            <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>Kelas</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $Pembayaran->kelas->nama_kelas }}</h4></div>
                                </div>
                            </div>
                            <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>Alamat</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $Pembayaran->alamat }}</h4></div>
                                </div>
                            </div>
                            <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>No Telepon</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $Pembayaran->no_telp }}</h4></div>
                                </div>
                            </div>
                            <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>Tahun</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>{{ $Pembayaran->spps->tahun }}</h4></div>
                                </div>
                            </div>
                            <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-5 text-start"><h3><b>Nominal</b></h3></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-5 text-start"><h4>Rp. {{number_format($Pembayaran->spps->nominal, 0,",",".")}}</h4></div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom_btn d-flex justify-content-between">
                            <a href="{{ route('pembayaran_index') }}" class="btn btn-outline-warning btn-icon-text mt-4">                                                  
                                Kembali
                            </a>

                            @if(auth()->user()->level == "admin")
                            <a href="{{ url('pembayaran/create/'. $Pembayaran->id) }}" class="btn btn-outline-success btn-icon-text mt-4">                                                  
                                Transaksi
                            </a>
                            @elseif(auth()->user()->level == "petugas")
                            <a href="{{ url('petugaspembayaran/create/'. $Pembayaran->id) }}" class="btn btn-outline-success btn-icon-text mt-4">                                                  
                                Transaksi
                            </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection