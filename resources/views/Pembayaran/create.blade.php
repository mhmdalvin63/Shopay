@extends('layout.main')
@section('title','Tambah Data Pembayaran')
@section('content')
<div class="row d-flex" style="justify-content: center;">

    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body p-5">
          {{-- <h4 class="card-title">Lakukan Transaksi Dengan {{$Siswa->nama}}</h4> --}}
          <form action="{{ url('pembayaran/store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Nama Petugas :</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_petugas">
                        @foreach ($Petugas as $item)
                        <option value="{{ $item->id}}">{{ $item->nama_petugas}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control d-none" id="exampleInputUsername1" name="id_siswa"  value="{{$Siswa->id}}">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputUsername1" disabled value="{{$Siswa->nama}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Tanggal Bayar :</label>
                      <input type="date" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Tanggal Bayar..." name="tgl_bayar">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Bulan Bayar :</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="bulan_bayar">
                        <option>Januari</option>
                        <option>Februari</option>
                        <option>Maret</option>
                        <option>April</option>
                        <option>Mei</option>
                        <option>Juni</option>
                        <option>Juli</option>
                        <option>Agustus</option>
                        <option>September</option>
                        <option>Oktober</option>
                        <option>November</option>
                        <option>Desember</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Tahun Bayar :</label>
                      <input type="number" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Tahun Bayar..." name="tahun_bayar">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Jumlah Bayar :</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nama Lengkap..." name="jumlah_bayar">
                    </div>

                    {{-- <div class="form-group">
                      <label for="exampleFormControlSelect2">Kelas :</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_kelas">
                        @foreach ($kelas as $item)
                        <option value="{{ $item->id}}">{{ $item->nama_kelas}}</option>
                        @endforeach
                      </select>
                    </div> --}}

                    {{-- <div class="form-group">
                      <label for="exampleTextarea1">Alamat :</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Masukkan Alamat Lengkap...." name="alamat"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nomor Telepon :</label>
                      <input type="number" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nomor Telepon..." name="no_telp">
                    </div> --}}
                    {{-- <div class="form-group">
                      <label for="exampleFormControlSelect2">Tahun :</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_spp">
                        @foreach ($spp as $item)
                        <option value="{{ $item->id}}">{{ $item->tahun }} {{ $item->nominal}}</option>
                        @endforeach
                      </select>
                    </div> --}}
                    <div class="modal-footer">
                          <a href="{{ route('pembayaran_index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                          Cancel
                        </a>
                          <button type="submit" class="btn btn-outline-primary btn-icon-text">
                          Submit
                        </button>
                    </div>
          </form>
        </div>
      </div>
    </div>
</div>


@endsection