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
        Schema::create('wisata__indonesias', function (Blueprint $table) {
            $table->id('id_wisata');
            $table->string('nama');
            $table->string('deskripsi');
            $table->string('hargatiket');
            $table->string('lokasi');
            $table->string('kategori');
            $table->float('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisata__indonesias');
    }
};
