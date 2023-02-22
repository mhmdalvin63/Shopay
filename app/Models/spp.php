<?php

namespace App\Models;

use App\Models\spp;
use App\Models\siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class spp extends Model
{
    protected $primaryKey = "id";
    protected $table = "spps";
    protected $fillable = [
        'id','tahun','nominal'
    ];

    public function siswa(){
        return $this->hasMany(siswa::class);
    }
}
