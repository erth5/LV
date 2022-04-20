<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'published_at',
        // 'views'  Not User Fillable
    ];
    
    // /**
    //  * Get the user that owns the PostFactory
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    // }
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Format Model Bestimmt Definieren (Global im config definierbar)
    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->format('d.m.Y H:i');                    
    }

    // Scope Funktion um bestandTeile im Eloquent hunzuzufügen
    public function scopeActive($query){
        return $query->where('published_at', '<=',now());
    }
}
