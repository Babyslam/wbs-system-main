<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditInvestigasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'surat_tugas',
        'ringkasan_hasil_audit',
        'laporan_hasil_audit',
        'rekomendasi',
        'pengaduan_id',
    ];
}
