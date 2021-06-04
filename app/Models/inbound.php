<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbound extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang','jenis_barang','jumlah_barang','tanggal_masuk'];

}
