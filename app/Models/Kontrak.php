<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrak extends Model
{
    use HasFactory;

    protected $table = "kontrak"; // menghubungkan ke dalam tabel kontrak

    // Data yang wajib di simpan
    protected $fillable = ['durasi','gaji'];
}
