<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booke extends Model
{
    use HasFactory;
    protected $table = 'bookes';
    protected $fillable = [
        'title',
        'year',
        'number_of_psge',
    ];
}
