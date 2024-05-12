<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = [
        'title',
        'year',
        'number_of_psge',
        'author_id',
        'created_at',
        'updated_at',
    ];

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
