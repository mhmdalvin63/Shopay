<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PembayaranResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'id_petugas' => $this->id_petugas,
            'id_siswa' => $this->id_siswa,
            'tgl_bayar' => $this->tgl_bayar,
            'bulan_bayar' => $this->bulan_bayar,
            'tahun_bayar' => $this->tahun_bayar,
            'jumlah_bayar' => $this->jumlah_bayar,

            // 'id' => $this->id,
            // 'project_id' => $this->project_id,
            // 'level' => $this->level,
            // 'client' => $this->client,
            // 'kuota' => $this->kuota,
            // 'lokasi' => $this->lokasi,
            // 'tahun_pengalaman' => $this->tahun_pengalaman,
            // 'gaji' => $this->gaji,
            // 'skill_pekerjaan' => $this->skill_pekerjaan,
            // 'deskripsi_pekerjaan' => $this->deskripsi_pekerjaan,
            // 'syarat_pekerjaan' => $this->syarat_pekerjaan,
            // 'status_aktif' => $this->status_aktif,
            // 'created_by' => $this->created_by,
            // 'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
