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
    // php artisan migrate --path=database/migrations/2024_03_11_134544_create_books_table.php    
    
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('title');
            $table->foreignId('author_id')
                  ->references('author_id')
                  ->on('authors')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->smallInteger('year');
            $table->foreignId('category_id')
                  ->references('category_id')
                  ->on('categories')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            // se il nome dell'id fosse diverso
            // $table->foreignId('category_id')->constrained(table: 'categories', indexName: 'cat_id');
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
