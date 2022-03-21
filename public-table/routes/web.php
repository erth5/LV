<?php

use App\Http\Controllers\CalendarTController;
use App\Http\Controllers\ChainTController;
use App\Http\Controllers\DifferentTController;
use App\Http\Controllers\PublicTController;
use App\Http\Controllers\SessionController;
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

// tables as Controllers        TODO remove specific uri name
Route::get('/public', [PublicTController::class, 'index'])->name('public');
Route::post('/update-public', [PublicTController::class, 'update']);
//Route::post('/show-public', [PublicTController::class, 'show']);

Route::get('/chain', [ChainTController::class, 'index'])->name('chain');
Route::post('/store-chain', [ChainTController::class, 'store']);

Route::get('/calendar', [CalendarTController::class, 'index'])->name('calendar');
Route::post('/update-calendar', [CalendarTController::class, 'update']);

Route::get('/different', [DifferentTController::class, 'index'])->name('different');
Route::post('/update-different', [DifferentTController::class, 'update']);

/* prepare: tables as blades

Route::get('/different', function () {
    return view('sites.different');
})->name('different');
*/

// table simples
Route::get('/contact', function () {
    return view('sites/contact');
})->name('contact');

Route::get('/about', function () {
    return view('sites.about');
})->name('about');

Route::get('/db_test', function (){
    return view('comp.db_test');
})->name('db_test');

Route::get('session/get', [SessionController::class, 'accessSessionData']);
Route::get('session/set', [SessionController::class, 'storeSessionData']);
Route::get('session/remove', [SessionController::class, 'deleteSessionData']);
