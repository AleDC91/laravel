<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'author_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'biography',
        'profile_image',
        'website'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function books() : HasMany {
        return $this->hasMany(Book::class, 'author_id', 'author_id');
    }

}
