<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DifferentT extends Model
{
    use HasFactory;

    protected $fillable = [
        'plus',
        'minus'
    ];
}
