<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    //
    protected $fillable = [
        'user id',
        'nama',
        'telp',
        'email',
        'alamat_penjemputan',
        'jenis_pemesanan',
        'jenis_layanan',
        'tanggal_penjemputan',
        'status',
        'berat',
        'total_harga',
    ];
}
