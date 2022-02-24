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

Route::get('/', [Start::class, 'index']);

Route::get('/table', [TableController::class, 'index']);

/*
Route::get('/table', function () {
    return view('sites/table');
});
*/

Route::get('/contact', function () {
    return view('sites/contact');
});

Route::get('/about', function () {
    return view('sites/about');
});


Route::get('/test', function () {
    return view('subfolder.info');
});
Route::get('/start', function () {
    return view('layout');
});
