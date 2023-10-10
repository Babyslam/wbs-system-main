<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penelahaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pokok_permasalahan',
        'analisis',
        'kesimpulan',
        'laporan',
        'pengaduan_id'
    ];
}
