<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

//convention: control Pages with Tag: Start
//convention: new Identifier: HomeController
class StartPageController extends Controller
{
    public function index(){
        // Verkürzte DB abfrage, active für nur aktive Artikel
        $posts = Post::with('user')->latest()->active()->limit(5)->get();
        return view('index', compact('posts'));
    }
}
