<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('waktu_dan_tempats', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal_akad');
            $table->dateTime('tanggal_resepsi');
            $table->string('alamat_akad');
            $table->string('alamat_resepsi');
            $table->string('map_alamat_akad');
            $table->string('map_alamat_resepsi');
            $table->foreignId('isi_undangan_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waktu_dan_tempats');
    }
};
