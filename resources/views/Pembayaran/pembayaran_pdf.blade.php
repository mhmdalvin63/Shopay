<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN PEMBAYARAN SPP {{$Pembayaran->siswa->nama}} BULAN {{$Pembayaran->bulan_bayar}}</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
        body{
            font-family: poppins;
        }
        table tr th{
            font-size: 15px;
        }
		table tr td{
			font-size: 12px;
		} 
	</style>

        {{-- <img src="./public/template/images/logo-sekolah.png"> --}}
	<center>
		{{-- <h2>LAPORAN PEMBAYARAN SPP <span>{{$Pembayaran->siswa->nama}} </span> BULAN <span>{{$Pembayaran->bulan_bayar}}</span></h2> --}}
        <h2>BUKTI PEMBAYARAN SPP</h2>
        <h3>SchoolCraft</h3>
	</center>
    <hr>


    <div class="container">
        <div class="content" style="width: 100%; height: 40%;">
                <div style="float: left; width: 70%;">
                    <div style="float: left; width: 30%;">
                        <p>ID Pembayaran </p>
                        <p>Nama Petugas </p>
                        <p>Nama Siswa </p>
                        <p>Tanggal Bayar </p>
                        <p>Bulan Bayar </p>
                        <p>Tahun Bayar </p>
                        <p>Jumlah Bayar </p>
                    </div>
                    <div style="margin-left: 35%; width: 10%">
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                    </div>
                    <div style="float: right; margin-top: -52.7%; width: 50%;">
                        <p>{{$Pembayaran->id}}</p>
                        <p>{{$Pembayaran->petugas->nama_petugas}}</p>
                        <p>{{$Pembayaran->siswa->nama}}</p>
                        <p>{{$Pembayaran->tgl_bayar}}</p>
                        <p>{{$Pembayaran->bulan_bayar}}</p>
                        <p>{{$Pembayaran->tahun_bayar}}</p>
                        <p>Rp.{{number_format($Pembayaran->jumlah_bayar, 0,",",".")}}</p>
                    </div>
                </div>
                <h2 style="margin-left: 70%; width: 30%; height: 80%; align-items: center;">
                    SchoolCraft.com
                </h2>
        </div>
    </div>

    <hr style="margin-top: -15%">
 
        
 
</body>
</html>