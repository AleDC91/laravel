<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
