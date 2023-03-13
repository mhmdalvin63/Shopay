@extends('layout.main')
@section('title','Data Pembayaran')
@section('content')

<style>
    .search-box {
        width: fit-content;
        height: fit-content;
        position: relative;
    }

    .input-search {
        height: 50px;
        width: 50px;
        border-style: none;
        padding: 10px;
        font-size: 18px;
        letter-spacing: 2px;
        outline: none;
        border-radius: 25px;
        transition: all .5s ease-in-out;
        background-color: #22a6b3;
        padding-right: 40px;
        color: #fff;
    }

    .input-search::placeholder {
        color: rgba(17, 1, 243, 0.5);
        font-size: 18px;
        letter-spacing: 2px;
        font-weight: 500;
    }

    .btn-search {
        width: 47px;
        height: 53px;
        border-style: none;
        font-size: 20px;
        font-weight: bold;
        outline: none;
        cursor: pointer;
        border-radius: 50%;
        position: absolute;
        right: 0px;
        color: #ffffff;
        background-color: transparent;
        pointer-events: painted;
    }

    .btn-search:focus~.input-search {
        color: rgba(17, 1, 243, 0.5);
        font-size: 18px;
        letter-spacing: 2px;
        font-weight: 500;
        width: 300px;
        border-radius: 0px;
        background-color: transparent;
        border-bottom: 2px solid rgba(4, 5, 94, 0.5);
        transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
    }

    .input-search:focus {
        color: grey;
        width: 300px;
        border-radius: 0px;
        background-color: transparent;
        border-bottom: 2px solid rgba(4, 5, 94, 0.5);
        transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
    }

</style>
<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

</script>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-title d-flex justify-content-end">
                <a style="display: none;" href="{{ url('pembayaran/create') }}"
                    class="btn btn-outline-danger btn-icon-text">
                    <i class="mdi mdi-upload btn-icon-prepend"></i>
                    Upload
                </a>
                {{-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."> --}}
                <div class="search-box">
                    <button class="btn-search"><i class="mdi mdi-account-search"></i></button>
                    <input type="text" id="myInput" onkeyup="myFunction()" class="input-search"
                        placeholder="Type to Search...">
                </div>
                {{-- <form class="example" action="action_page.php" id="myInput" onkeyup="myFunction()">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form> --}}
            </div>
            <div class="table-responsive text-center">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Petugas</th>
                            <th>Nama Siswa</th>
                            <th>Tanggal Bayar</th>
                            <th>Bulan Bayar</th>
                            <th>Tahun Bayar</th>
                            <th>Jumlah Bayar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($Pembayaran as $item)
                        <tr class="tr">
                            <td>{{$item->id}}</td>
                            <td>{{$item->petugas->nama_petugas}}</td>
                            <td>{{$item->siswa->nama}}</td>
                            <td>{{$item->tgl_bayar}}</td>
                            <td>{{$item->bulan_bayar}}</td>
                            <td>{{$item->tahun_bayar}}</td>
                            <td>Rp.{{number_format($item->jumlah_bayar, 0,",",".")}}</td>
                            {{-- <td>{{number_format($item->spps->nominal, 0,",",".")}}</td> --}}
                            @if(auth()->user()->level == "admin")
                            <td class="d-flex gap-3 justify-content-center">
                                <a href="{{url('pembayaran/cetak_pdf/'.$item->id)}}"
                                    class="btn btn-outline-primary btn-icon-text">
                                    Cetak
                                </a>
                            </td>
                            @elseif(auth()->user()->level == "petugas")
                            <td class="d-flex gap-3 justify-content-center">
                                <a href="{{url('petugaspembayaran/cetak_pdf/'.$item->id)}}"
                                    class="btn btn-outline-primary btn-icon-text">
                                    Cetak
                                </a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
