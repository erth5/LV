<?php

use App\Http\Controllers\Start;
use App\Http\Controllers\TableController;
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

// Main
Route::get('/', function (){
    return view('layout');
});

// tables as Controllers
Route::get('/table', [TableController::class, 'index']);

// prepare: tables as blades
Route::get('/public', function () {
    return view('sites.public');
});
Route::get('/public', function () {
    return view('sites/public');
});
Route::get('/public', function () {
    return view('sites.public');
});

// tables simple
Route::get('/contact', function () {
    return view('sites/contact');
});

Route::get('/about', function () {
    return view('sites.about');
});
