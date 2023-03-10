@extends('layout.main')
@section('title','Data Pembayaran')
@section('content')

<style>
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
</style>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex justify-content-end">
            <a style="display: none;" href="{{ route('pembayaran_create') }}" class="btn btn-outline-danger btn-icon-text" >
                <i class="mdi mdi-upload btn-icon-prepend"></i>                                                    
                Upload
            </a>
            <form class="example" action="action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
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
            <tbody>
                @foreach ($Pembayaran as $item)
                <tr>
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