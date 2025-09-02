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
        Schema::create('hadiahs', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekening1');
            $table->string('no_rekening2');
            $table->string('nama_bank1');
            $table->string('nama_bank2');
            $table->foreignId('isi_undangan_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hadiahs');
    }
};
