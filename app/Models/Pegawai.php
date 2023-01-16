<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = "pegawai"; // menghubungkan ke dalam tabel pegawai

    // Data yang wajib di simpan
    protected $fillable = ['nama','ttl','usia'];
}
