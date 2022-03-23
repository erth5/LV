<?php

// Importierte Klasse von Models

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Post Page
Route::get('/', function(){

    // Log Accesses of Database
    \Illuminate\Support\Facades\DB::listen((function($query){
        logger($query->sql, $query->bindings);
    }));

    return view('posts', [
        // n+1 Problem und jeder Blockeintrag ein Query
        //'posts' => Post::all()

        // Lösung
        'posts' => Post::with('category')->get()
    ]);
});

// Category Page
Route::get('categories/{category:slug}', function(Category $category){
    return view('posts', [
        'post' => $category->posts
    ]);
});

// This function has route-model-binding
// Give me the post, where the slug matches the slug you provide
Route::get('posts/{post:slug}', function(Post $post){   // Post::where('slug', $post)->firstOrFail(result)
    return view('post', [
        'post' => $post
    ]);
});







/* Version without Database
Route::get('/', function () {
    $files = File::files(resource_path("posts"));

    //collect Methode
    $posts = collect($files)
        ->map(function ($file){
            $document = YamlFrontMatter::parseFile($file);

            return new Post(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
            );
        });

        /*  //Array Map
    $posts = array_map(function ($file){
        $document = YamlFrontMatter::parseFile($file);

        return new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        );
    }, $files);

    return view('posts', ['posts' => $posts]);

//    return view('welcome');
});


Route::get('/test', function (){
    return view('test');
});

/* Mehrere Dokumente Automatisch Zuweisen
 * Verteilt Ordner Posts durch die Klasse Post(app/Models)
 * an den jeweiligen view
 *
 *

// Find and Files
Route::get('/posts', function (){
    //ddd($posts); // Debug die Array von Dateien
    // $posts[0]->getPathname();
    return view('posts', [
        'posts' => Post::all()
    ]);
});

// Find by name and pass to view called "post"
Route::get('post/{post}', function ($slug){
    // Here we have a Post class
    $post = Post::find($slug);

    return view('post', [
        'post' => Post::find($slug)
    ]);
});

*/
