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
        Schema::create('books', function (Blueprint $table) {
            $table->string('ISBN')->primary();
            $table->string('judul');
            $table->unsignedInteger('penulis_id');
            $table->unsignedInteger('penerbits_id');
            $table->unsignedInteger('categories_id');
            $table->integer('tahun_terbit');
            $table->string('bahasa');
            $table->integer('halaman');
            $table->text('deskripsi');
            $table->string('pdf');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
