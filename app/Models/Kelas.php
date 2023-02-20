<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $primaryKey = "id";
    protected $table = "Kelas";
    protected $fillable = [
        'id','nama_kelas','kompetensi_keahlian'
    ];
}