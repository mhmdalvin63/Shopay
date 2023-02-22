<?php

namespace App\Models;

use App\Models\siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    protected $primaryKey = "id";
    protected $table = "Kelas";
    protected $fillable = [
        'id','nama_kelas','kompetensi_keahlian'
    ];

    public function siswa(){
        return $this->hasMany(siswa::class);
    }
}


