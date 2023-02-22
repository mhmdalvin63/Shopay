<?php

namespace App\Models;

use App\Models\siswa;
use App\Models\petugas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class petugas extends Model
{
    protected $primaryKey = "id";
    protected $table = "petugas";
    protected $fillable = [
        'id','username','password', 'nama_petugas'
    ];

    public function siswa(){
        return $this->hasMany(siswa::class);
    }
}
