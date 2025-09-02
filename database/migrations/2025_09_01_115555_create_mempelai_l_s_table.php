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
        Schema::create('mempelai_l_s', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_panggilan');
            $table->string('nama_bapak');
            $table->string('nama_ibu');
            $table->string('alamat')->nullable();
            $table->string('foto');
            $table->foreignId('isi_undangan_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mempelai_l_s');
    }
};
