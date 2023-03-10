@extends('layout.main')
@section('title','Data Pembayaran')
@section('content')

<style>
    #toppp{
        display: none;
    }
</style>

{{-- <style>
    form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
    }

    /* Style the submit button */
    form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none; /* Prevent double borders */
    cursor: pointer;
    }

    form.example button:hover {
    background: #0b7dda;
    }

    /* Clear floats */
    form.example::after {
    content: "";
    clear: both;
    display: table;
    }
</style> --}}

<div class="row d-flex justify-content-center">
    
    <div class="col-lg-2 grid-margin stretch-card">
        <div class="card"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <div class="card-body pb-0">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-danger font-weight-bold">{{ number_format($Petugas) }}</h2>
                    <i class="mdi mdi-refresh mdi-18px text-dark"></i>
                </div>
            </div>
            <canvas id="allProducts" width="196" height="97" style="display: block; width: 196px; height: 97px;" class="chartjs-render-monitor"></canvas>
            <div class="line-chart-row-title">Petugas</div>
        </div>
    </div>
    <div class="col-lg-2 grid-margin stretch-card">
        <div class="card"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <div class="card-body pb-0">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-info font-weight-bold">{{ number_format($Siswa) }}</h2>
                    <i class="mdi mdi-file-document-outline mdi-18px text-dark"></i>
                </div>
            </div>
            <canvas id="invoices" width="196" height="97" style="display: block; width: 196px; height: 97px;" class="chartjs-render-monitor"></canvas>
            <div class="line-chart-row-title">Siswa</div>
        </div>
    </div>
    <div class="col-lg-2 grid-margin stretch-card">
        <div class="card"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <div class="card-body pb-0">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-warning font-weight-bold">{{ number_format($Kelas) }}</h2>
                    <i class="mdi mdi-folder-outline mdi-18px text-dark"></i>
                </div>
            </div>
            <canvas id="projects" width="196" height="97" style="display: block; width: 196px; height: 97px;" class="chartjs-render-monitor"></canvas>
            <div class="line-chart-row-title">Kelas</div>
        </div>
    </div>
    <div class="col-lg-2 grid-margin stretch-card">
        <div class="card"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <div class="card-body pb-0">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-secondary font-weight-bold">{{ number_format($Pembayaran) }}</h2>
                    <i class="mdi mdi-cart-outline mdi-18px text-dark"></i>
                </div>
            </div>
            <canvas id="orderRecieved" width="196" height="97" style="display: block; width: 196px; height: 97px;" class="chartjs-render-monitor"></canvas>
            <div class="line-chart-row-title">Transaksi</div>
        </div>
    </div>
</div>

@endsection