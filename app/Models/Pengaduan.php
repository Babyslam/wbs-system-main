<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_pengaduan',
        'perihal',
        'nama_terlapor',
        'jabatan_terlapor',
        'perangkat_daerah',
        'tempat_kejadian',
        'tanggal_kejadian',
        'detail_kejadian',
        'nomor_agenda',
        'tanggal_agenda',
        'catatan',
        'status',
        'status_pengaduan',
        'status_tercatat',
        'status_penelahaan',
        'status_audit_investigasi',
        'status_pelimpahan',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bukti()
    {
        return $this->hasMany(BuktiPengaduan::class);
    }

    public function penelahaan()
    {
        return $this->hasOne(Penelahaan::class);
    }

    public function audit()
    {
        return $this->hasOne(AuditInvestigasi::class);
    }

    public function pelimpahan()
    {
        return $this->hasOne(Pelimpahan::class);
    }
}
