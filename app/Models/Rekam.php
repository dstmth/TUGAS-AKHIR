<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekam extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomorantrian',
        'id_pasien',
        'Tanggal Periksa',
        'layanan',
        'keluhan',
        'id_dokter',
        'diagnosa',
        'id_obat',
        'jumlahobat',
        'keterangan',
        'lamabaru',
        'rawat',
        'darah',
        'berat',
        'tinggi',
        'pinggang',
        'hari_pertama_haid',
        'hari_terakhir_haid',
        'taksiran_persalinan',
    ];
    protected $guarded =['id'];

    public function pasien(){
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }

    public function obat(){
        return $this->belongsTo(Obat::class, 'id_obat');
    }

    public function dokter(){
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }
}
