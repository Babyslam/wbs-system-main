<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelimpahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'hasil_rapat_eksternal',
        'pengaduan_id'
    ];
}
