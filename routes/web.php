<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/home',[AdminController::class, 'index']);
route::get('/log_out',[AdminController::class, 'log_out']);
route::get('/adminProducts',[AdminController::class, 'products']);
route::POST('/AddNewProduct',[AdminController::class, 'AddNewProduct']);
route::get('/category_page',[AdminController::class, 'category_page']);
route::post('/add_category',[AdminController::class, 'add_category']);