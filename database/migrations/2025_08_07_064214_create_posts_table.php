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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul konten
            $table->string('slug')->unique(); // URL friendly
            $table->text('excerpt')->nullable(); // Ringkasan
            $table->longText('content')->nullable(); // Isi lengkap (HTML/Markdown)
            $table->string('featured_image')->nullable(); // Thumbnail atau cover

            // Opsional untuk dokumen
            $table->string('drive_link')->nullable(); // Link Google Drive (jika type document)
            
            // Kategori & tipe konten
            $table->string('type')->default('post'); // post, page, document
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            
            // Relasi ke user (penulis)
            $table->foreignId('author_id')->constrained('users')->cascadeOnDelete();

            // Status publikasi
            $table->enum('status', ['draft', 'published'])->default('draft');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
