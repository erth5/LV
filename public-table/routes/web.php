<?php

use App\Http\Controllers\ChainTController;
use App\Http\Controllers\PublicTController;
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
Route::get('/', function () {
    return view('layout');
});

// tables as Controllers
Route::get('/public', [PublicTController::class, 'index']);
Route::get('/chain', [ChainTController::class, 'index']);

// prepare: tables as blades
Route::get('/calendar', function () {
    return view('sites/calendar');
});
Route::get('/different', function () {
    return view('sites.different');
});

// table simples
Route::get('/contact', function () {
    return view('sites/contact');
});

Route::get('/about', function () {
    return view('sites.about');
});
