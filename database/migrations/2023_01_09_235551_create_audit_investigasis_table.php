<?php

use App\Models\Pengaduan;
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
        Schema::create('audit_investigasis', function (Blueprint $table) {
            $table->id();
            $table->string('surat_tugas');
            $table->longText('ringkasan_hasil_audit');
            $table->string('laporan_hasil_audit');
            $table->longText('rekomendasi');
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
        Schema::dropIfExists('audit_investigasis');
    }
};
