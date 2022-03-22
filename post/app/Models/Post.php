<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // This fillable propertie specifies, wich attributes can be mass-assign
    protected $fillable = ['title', 'excerpt', 'body'];

    // This guarded propertie says, that everything! is fillable, except this array of attributes
    //protected $guarded = ['id'];

    public function category(){
        // hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }

    /*  With This Method, we override ID with the slug
        So in the routes file, we can write;
        Route::get('posts/{post}', function...
    */
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
