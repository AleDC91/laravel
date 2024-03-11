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
    // fare migrazioni manualmente, perche con artisan migrate le fa in ordine di 
    // crezione, ma in questo caso, books necessita di authors e categories:
    // php artisan migrate --path=database/migrations/2024_03_11_134731_create_authors_table.php
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id('author_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth')->nullable();
            $table->text('biography')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('website')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
