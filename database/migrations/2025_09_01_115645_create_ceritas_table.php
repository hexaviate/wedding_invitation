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
        Schema::create('ceritas', function (Blueprint $table) {
            $table->id();
            $table->string('cerita1');
            $table->string('cerita2');
            $table->string('cerita3');
            $table->string('video')->nullable();
            $table->foreignId('isi_undangan_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ceritas');
    }
};
