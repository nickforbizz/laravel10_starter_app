<?php

use App\Http\Controllers\cms\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    echo 'something';
    // return what you want
});

Route::get('/clear-config', function() {
    Artisan::call('config:clear');
    // return what you want
});

Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    // return what you want
});

Route::get('/optimize', function() {
    Artisan::call('optimize');
    // return what you want
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


Route::get('/', function () {
    return view('welcome');
});


// Backend/CMS
Route::middleware('cms')->group(function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/cms', [App\Http\Controllers\HomeController::class, 'cms'])->name('cms');
    Route::resource('users', UserController::class);
});





// Frontend
