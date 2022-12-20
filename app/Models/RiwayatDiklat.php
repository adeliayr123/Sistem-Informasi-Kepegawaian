<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatDiklat extends Model
{
    use HasFactory;
    protected $table = "riwayat_diklat";

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class, 'id_peg', 'id_peg');
    }

    public function diklat()
    {
        return $this->hasOne(Diklat::class, 'kode_diklat', 'kode_diklat');
    }
}
