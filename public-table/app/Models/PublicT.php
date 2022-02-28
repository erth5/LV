<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicT extends Model
{
    use HasFactory;

    protected $fillable = [
        'editor',
        'word1',
        'word2',
        'word3',
    ];
}
