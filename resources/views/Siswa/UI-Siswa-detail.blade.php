<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        body{
            background-color: #0E52B7;
        }
    </style>
  </head>
  <body>
    <section class="detail_history p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="/UI">
                        <img src="{{asset('template/images/icon-back.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 text-center p-5" >
                    <div class="left_content py-5" style="background-color: white; border-radius: 2rem;">
                        <img width="65%" class="mb-3" src="{{asset('template/images/qr-code.png')}}" alt="">
                    <h4>Schoolcraft.com</h4>
                    </div>
                </div>

                <div class="col-md-7 p-4 " >
                    <div class="right_content py-3" style="background-color: white; border-radius: 2rem;">
                        <div class="top_content text-center mt-3">
                            <img class="mb-3" src="{{asset('template/images/green-success.png')}}" alt="">
                            <h3 class="mb-5">Pembayaran Berhasil</h3>
                            <hr class="bg-danger border-3 border-top border-success">
                            <h3 class="mt-4">Detail Pembayaran</h3>
                        </div>
                        
                        <div class="middle_content d-flex px-5" style="justify-content: center;">
                            <div class="row">
                                <div class="col-md-6 mt-3"><h5>ID Pembayaran</h5></div>
                                <div class="col-md-6 mt-3 text-end"><h5>{{$Pembayaran->id}}</h5></div>
                                <div class="col-md-6 mt-3"><h5>Nama Petugas</h5></div>
                                <div class="col-md-6 mt-3 text-end"><h5>{{$Pembayaran->petugas->nama_petugas}}</h5></div>
                                <div class="col-md-6 mt-3"><h5>Tanggal Pembayaran</h5></div>
                                <div class="col-md-6 mt-3 text-end"><h5>{{$Pembayaran->tgl_bayar}}</h5></div>
                                <div class="col-md-6 mt-3"><h5>Pembayaran Bulan</h5></div>
                                <div class="col-md-6 mt-3 text-end"><h5>{{$Pembayaran->bulan_bayar}}</h5></div>
                                <div class="col-md-6 mt-3"><h5>Pembayaran Tahun</h5></div>
                                <div class="col-md-6 mt-3 text-end"><h5>{{$Pembayaran->tahun_bayar}}</h5></div>
                                <div class="col-md-6 mt-3"><h5>Jumlah Bayar</h5></div>
                                <div class="col-md-6 mt-3 text-end"><h5>Rp.{{number_format($Pembayaran->jumlah_bayar, 0,",",".")}}</h5></div>
                            </div>
                        </div>
                        <hr class="bg-danger border-3 border-top border-success">
                        <p class="text-center text-danger mt-4">Note : Setiap Pembayaran Telat >10 Hari Dikenakan Denda RP. 5000/Hari</p>
                    </div>
                </div>
            </div>
        </div>
    </section>










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>