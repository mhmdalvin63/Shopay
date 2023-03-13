@extends('layout.main')
@section('title','Data Pembayaran')
@section('content')

<style>
  .search-box{
  width: fit-content;
  height: fit-content;
  position: relative;
}
.input-search{
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
  color:#fff;
}
.input-search::placeholder{
  color:rgba(17, 1, 243, 0.5);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 500;
}
.btn-search{
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
  color:#ffffff ;
  background-color:transparent;
  pointer-events: painted;  
}
.btn-search:focus ~ .input-search{
  color:rgba(17, 1, 243, 0.5);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 500;
  width: 300px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:2px solid rgba(4, 5, 94, 0.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  color: grey;
  width: 300px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:2px solid rgba(4, 5, 94, 0.5);
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
      td = tr[i].getElementsByTagName("td")[3];
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
            {{-- <a style="display: none;" href="{{ route('pembayaran_create') }}" class="btn btn-outline-danger btn-icon-text" >
                <i class="mdi mdi-upload btn-icon-prepend"></i>                                                    
                Upload
            </a> --}}
            <div class="search-box">
              <button class="btn-search"><i class="mdi mdi-account-search"></i></button>
              <input type="text" id="myInput" onkeyup="myFunction()" class="input-search" placeholder="Type to Search...">
            </div>
        </div>
        <div class="table-responsive text-center">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>NISN</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Tahun</th>
                <th>SPP</th>
                <th>Aksi</th>
                {{-- <th>ID</th>
                <th>Petugas</th>
                <th>NISN</th>  
                <th>SPP</th>  
                <th>Tanggal Bayar</th>
                <th>Bulan Bayar</th>
                <th>Tahun Bayar</th>
                <th>Jumlah Bayar</th> --}}
              </tr>
            </thead>
            <tbody id="myTable">
                @foreach ($Pembayaran as $item)
                <tr class="tr">
                  <td>{{$item->id}}</td>
                  <td>{{$item->nisn}}</td>
                  <td>{{$item->nis}}</td>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->kelas->nama_kelas}}</td>
                  <td>{{$item->alamat}}</td>
                  <td>{{$item->no_telp}}</td>
                  <td>{{$item->spps->tahun}}</td>
                  <td>{{number_format($item->spps->nominal, 0,",",".")}}</td>
                  <td class="d-flex gap-3 justify-content-center">
                    <a href="{{ route('pembayaran_show', $item->id )}}" class="btn btn-outline-primary btn-icon-text">
                        Lihat
                      </a>
                    {{-- <a href="{{ route('pembayaran_edit', $item->id )}}" class="btn btn-outline-success btn-icon-text" >
                        Edit                        
                    </a>
                    <form action="{{ route('pembayaran_delete', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-icon-text">Hapus</button>
                    </form> --}}
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection