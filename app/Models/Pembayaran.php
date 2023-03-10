<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $primaryKey = "id";
    protected $table = "Pembayaran";
    protected $fillable = [
        'id','id_petugas','id_siswa', 'tgl_bayar', 'bulan_bayar', 'tahun_bayar', 'jumlah_bayar'
    ];

    public function siswa(){
        return $this->belongsTo(siswa::class, 'id_siswa');
    }

    public function petugas(){
        return $this->belongsTo(Petugas::class, 'id_petugas');
    }
}
