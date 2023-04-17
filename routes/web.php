<?php

use App\Events\UserRegistered;
use App\Http\Controllers\cms\AssignRoleController;
use App\Http\Controllers\cms\NotificationController;
use App\Http\Controllers\cms\PermissionController;
use App\Http\Controllers\cms\UserController;
use App\Http\Controllers\cms\PostCategoryController;
use App\Http\Controllers\cms\PostController;
use App\Http\Controllers\cms\ReportController;
use App\Http\Controllers\cms\RoleController;
use App\Http\Controllers\HomeController;
use App\Models\Role;
use App\Models\User;
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
Route::get('/test', function() {
    // $admins = Role::whereIn('name', ['admin', 'superadmin'])
    // ->with('users')->get();
    $users = User::whereHas('roles', function ($query) {
        $query->whereIn('name', ['admin', 'superadmin']);
    })->get();
    return $users;
    // return what you want
}); 

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

    Route::get('/home', [HomeController::class, 'cms'])->name('home');
    Route::get('/cms', [HomeController::class, 'cms'])->name('cms');
    Route::get('/search', 'SearchController@search')->name('search');


    // Downloadable Reports
    Route::get('reports/download/csv', [ReportController::class, 'downloadCsv'])->name('reports.download.csv');


    
    // Resources Routes
    Route::resources([
        'users' => UserController::class,
        'posts' => PostController::class,
        'postCategories' => PostCategoryController::class,
        'roles' => RoleController::class,
        'permissions' => PermissionController::class,
        'assignRoles' => AssignRoleController::class,
        'reports' => ReportController::class,
        'notifications' => NotificationController::class,
    ]);
    Route::post('/notifications//mark-as-read', [NotificationController::class, 'markNotification'])->name('notifications.markNotification');
});





// Frontend
