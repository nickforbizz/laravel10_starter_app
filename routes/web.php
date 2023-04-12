<?php

use App\Http\Controllers\cms\AssignRoleController;
use App\Http\Controllers\cms\PermissionController;
use App\Http\Controllers\cms\UserController;
use App\Http\Controllers\cms\PostCategoryController;
use App\Http\Controllers\cms\PostController;
use App\Http\Controllers\cms\ReportController;
use App\Http\Controllers\cms\RoleController;
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
    echo 'cache:clear';
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

Route::get('/flush-perms', function() {
    Artisan::call('permission:cache-reset');
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

    // Downloadable Reports
    Route::get('reports/download/csv', 'ReportController@downloadCsv')->name('reports.download.csv');
    Route::get('reports/download/pdf', 'ReportController@downloadPdf')->name('reports.download.pdf');


    
    // Resources Routes
    Route::resources([
        'users' => UserController::class,
        'posts' => PostController::class,
        'postCategories' => PostCategoryController::class,
        'roles' => RoleController::class,
        'permissions' => PermissionController::class,
        'assignRoles' => AssignRoleController::class,
        'reports' => ReportController::class,
    ]);
});





// Frontend
