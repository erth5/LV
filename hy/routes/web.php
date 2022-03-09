<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});//blade way 1

/*
Route::get('/test', function () {
    return view('components/layout');
});//blade way 2 (needs correct components' folder)
*/

// Main Frames (Menu top points)

Route::get('/styling', function (){
    return view('styling');
});

/*
Route::get('/', function (){
    return view('');
});
Route::get('/', function (){
    return view('');
});
Route::get('/', function (){
    return view('');
});
Route::get('/', function (){
    return view('');
});
*/

// Sub Menus
Route::get('/styling/five_tools', function (){
    return view('styling/five_tools');
});
