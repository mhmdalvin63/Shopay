<?php

namespace App\Models;

use App\Models\spp;
use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class siswa extends Model
{
    protected $primaryKey = "id";
    protected $table = "siswas";
    protected $fillable = [
        'nisn','nis','nama', 'id_kelas', 'alamat', 'no_telp', 'id_spp'
    ];


    public function kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function spps(){
        return $this->belongsTo(spp::class, 'id_spp');
    }

}
