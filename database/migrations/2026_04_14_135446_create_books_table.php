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
            $table->id();
            // --- Activity 4 Book Fields ---
            $table->string('title'); // Book title
            $table->string('author'); // Author name
            $table->text('description'); // Summary of the book
            $table->string('genre'); // e.g. Fiction, Sci-Fi
            $table->integer('published_year'); // Year published
            $table->string('isbn')->unique(); // Unique book code
            $table->integer('pages'); // Number of pages
            $table->string('language'); // e.g. English
            $table->string('publisher'); // Publishing company
            $table->decimal('price', 8, 2); // Book price
            $table->string('cover_image')->nullable(); // Image path
            $table->boolean('is_available')->default(true); // Available or not
            // ------------------------------
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