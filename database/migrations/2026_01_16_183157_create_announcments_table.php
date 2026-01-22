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
        Schema::create('announcments', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul agenda
            $table->string('slug')->unique(); // URL yang unik untuk agenda
            $table->text('description')->nullable(); // Deskripsi agenda
            $table->string('author'); // Penulis/organisasi yang membuat agenda
            $table->date('start_date'); // Tanggal mulai acara
            $table->date('end_date'); // Tanggal selesai acara
            $table->time('start_time'); // Jam mulai acara
            $table->time('end_time'); // Jam selesai acara
            $table->string('location'); // Lokasi acara
            $table->integer('contact_person')->nullable(); // Kontak person untuk acara (nomor telepon)
            $table->string('media')->nullable(); // Media yang digunakan (misalnya Zoom, VC, dsb)
            $table->string('theme'); // Tema agenda
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcments');
    }
};
