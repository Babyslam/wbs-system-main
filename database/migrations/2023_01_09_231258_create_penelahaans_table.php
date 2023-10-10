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
        Schema::create('penelahaans', function (Blueprint $table) {
            $table->id();
            $table->longText('pokok_permasalahan');
            $table->longText('analisis');
            $table->longText('kesimpulan');
            $table->string('laporan');
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
        Schema::dropIfExists('penelahaans');
    }
};
