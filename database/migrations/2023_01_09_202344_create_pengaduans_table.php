<?php

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pengaduan');
            $table->string('perihal');
            $table->string('nama_terlapor');
            $table->string('jabatan_terlapor');
            $table->string('perangkat_daerah');
            $table->string('tempat_kejadian');
            $table->date('tanggal_kejadian');
            $table->longText('detail_kejadian');
            $table->string('nomor_agenda')->nullable();
            $table->date('tanggal_agenda')->nullable();
            $table->longText('catatan')->nullable();
            $table->enum('status', ['Pengaduan', 'Tercatat', 'Penelahaan', 'Audit Investigasi', 'Pelimpahan', 'Selesai', 'Di Tolak', 'Di Batalkan'])->default('Pengaduan');
            $table->enum('status_pengaduan', ['draft', 'disetujui', 'ditolak'])->default('draft');
            $table->enum('status_tercatat', ['draft', 'disetujui', 'ditolak'])->nullable();
            $table->enum('status_penelahaan', ['draft', 'disetujui', 'ditolak'])->nullable();
            $table->enum('status_audit_investigasi', ['draft', 'disetujui', 'ditolak'])->nullable();
            $table->enum('status_pelimpahan', ['draft', 'disetujui', 'ditolak'])->nullable();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('bukti_pengaduan', function (Blueprint $table) {
            $table->id();
            $table->string('filename');
            $table->foreignIdFor(Pengaduan::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduans');
        Schema::dropIfExists('bukti_pengaduan');
    }
};
