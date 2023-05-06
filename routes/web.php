<?php

use App\Events\UserRegistered;
use App\Http\Controllers\cms\AssignRoleController;
use App\Http\Controllers\cms\NotificationController;
use App\Http\Controllers\cms\PermissionController;
use App\Http\Controllers\cms\UserController;
use App\Http\Controllers\cms\PostCategoryController;
use App\Http\Controllers\cms\PostController;
use App\Http\Controllers\cms\ProductCategoryController;
use App\Http\Controllers\cms\ProductController;
use App\Http\Controllers\cms\ReportController;
use App\Http\Controllers\cms\RoleController;
use App\Http\Controllers\cms\SearchController;
use App\Http\Controllers\frontend\ViewsController;
use App\Http\Controllers\HomeController;
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

Route::get('/test', function () {
    // $admins = Role::whereIn('name', ['admin', 'superadmin'])
    // ->with('users')->get();
    $users = User::whereHas('roles', function ($query) {
        $query->whereIn('name', ['admin', 'superadmin']);
    })->get();
    return $users;
    // return what you want
});



Route::get('/optimize', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('optimize');
    Artisan::call('storage:link');
    Artisan::call('composer dump-autoload');
    return 'done';
});

Route::get('/flush-perms', function () {
    Artisan::call('permission:cache-reset');
    // return what you want
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


// Route::get('/', function () {
//     return view('welcome');
// });


// Frontend Views
Route::get('/', [ViewsController::class, 'index'])->name('wellcome');
Route::get('/about', [ViewsController::class, 'about'])->name('about');
Route::get('/blog/{id}', [ViewsController::class, 'getPost'])->name('blog');
Route::get('/blogs', [ViewsController::class, 'posts'])->name('blogs');
Route::prefix('web')->group(function () {

});

// Backend/CMS
Route::middleware('cms')->group(function () {

    Route::get('/home', [HomeController::class, 'cms'])->name('home');
    Route::get('/cms', [HomeController::class, 'cms'])->name('cms');
    Route::get('/search', [SearchController::class, 'search'])->name('search');


    // Downloadable Reports
    Route::get('reports/download/csv', [ReportController::class, 'downloadCsv'])->name('reports.download.csv');



    // Resources Routes
    Route::resources([
        'users' => UserController::class,
        'posts' => PostController::class,
        'postCategories' => PostCategoryController::class,
        'products' => ProductController::class,
        'productCategories' => ProductCategoryController::class,
        'roles' => RoleController::class,
        'permissions' => PermissionController::class,
        'assignRoles' => AssignRoleController::class,
        'reports' => ReportController::class,
        'notifications' => NotificationController::class,
    ]);

    // CART Routes
    Route::get('cart', [ProductsController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('addToCart');
    Route::patch('update-cart', [ProductsController::class, 'updateCart'])->name('updateCart');
    Route::delete('remove-from-cart', [ProductsController::class, 'removeCartItem'])->name('removeCartItem');

    Route::post('/notifications//mark-as-read', [NotificationController::class, 'markNotification'])->name('notifications.markNotification');
});


