<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarT extends Model
{
    use HasFactory;

    protected $fillable = [
        'editor',
        'mo',
        'tu',
        'we',
        'th',
        'fr',
        'sa',
        'su',
    ];
}
