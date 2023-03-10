<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
    body{
        background-color: #0E52B7;
    }
    .dashboard{
        position: fixed;
        width: 100%;
    }
    #setting{
        width: 30px;
        position: absolute;
        top: 0;
        right: 0;
    }

    .content{
        position: absolute;
        scroll-behavior: smooth;
        top: 50%;
        width: 100%;
        z-index: 2;
        background-color: #fff;
        padding: 5rem;
        height: max-content;
        border-radius:11rem 11rem 0 0; 
    }
    #list_history{
        align-items: center;
    }
  </style>
  <body>
    
    <section class="dashboard">
        {{-- <img id="setting" src="{{asset('template/images/setting.png')}}" alt=""> --}}
        <div class="container">
            <div class="row text-center py-3">
                <div class="col-md-12 mt-3"><img src="{{asset('template/images/profil-ui.png')}}" alt=""></div>
                <div class="col-md-12 mt-3 text-white fw-bold"><h3>Muhammad Alvin</h3></div>
                <div class="col-md-12 mt-3 text-white fw-bold"><h2>01928374657382</h2></div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"><h1 class="text-center mb-5" style="color: #0E52B7;">History Pembayaran</h1></div>
                @foreach ($Pembayaran as $item)
                <a href="/UI-id" style="text-decoration: none;">
                    <div class="col-md-12 px-5 py-1 mt-5" style="background-color: #0E52B7; color: white; border-radius: 25px;">
                        <div class="row d-flex" id="list_history">
                            <div class="col-md-2"><img width="75%" src="{{asset('template/images/icon-list-history.png')}}" alt=""></div>
                            <div class="col-md-5">
                                <h2>{{$item->bulan_bayar}}</h2>
                                <h4 style="opacity: 50%;">{{$item->nama_petugas}}</h4>
                            </div>
                            <div class="col-md-3 text-center">
                                <h4>Rp.{{number_format($item->jumlah_bayar, 0,",",".")}}</h4>
                            </div>
                            <div class="col-md-2 text-end">
                                <img width="25%" src="{{asset('template/images/info-list-history.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
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