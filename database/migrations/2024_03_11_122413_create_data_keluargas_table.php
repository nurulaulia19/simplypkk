<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_keluargas', function (Blueprint $table) {
            $table->string('punya_tempat_sampah');
            $table->string('punya_saluran_air');
            $table->string('tempel_stiker');
            $table->string('kriteria_rumah');
            $table->string('aktivitas_UP2K');
            $table->string('aktivitas_kegiatan_usaha');
            $table->integer('periode');
            $table->boolean('dilihat')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_keluargas');
    }
};
