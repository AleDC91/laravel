<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $primaryKey = 'book_id';

    protected $fillable = [
        'title',
        'author_id',
        'year',
        'category_id'
    ];
    
    public function author() {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
                                              // 'foreign_key', 'owner_key'
    }
}
