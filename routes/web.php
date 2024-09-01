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


// Admin Routes -----> Kindly add admin routes in this section

route::get('/home',[AdminController::class, 'index']);
route::get('/log_out',[AdminController::class, 'log_out']);
route::get('/adminProducts',[AdminController::class, 'products']);
route::POST('/AddNewProduct',[AdminController::class, 'AddNewProduct']);
route::get('/category_page',[AdminController::class, 'category_page']);
route::post('/add_category',[AdminController::class, 'add_category']);

route::get('/cat_delete/{id}',[AdminController::class, 'cat_delete']);
route::get('/edit_category/{id}',[AdminController::class, 'edit_category']);
route::post('/update_category/{id}',[AdminController::class, 'update_category']);




// Home Routes  -----> Kindly add admin routes above this section

route::get('/about',[HomeController::class,'about']);
route::get('/product',[HomeController::class,'product']);
route::get('/testimonial',[HomeController::class,'testimonial']);
route::get('/faq',[HomeController::class,'faq']);
route::get('/contact',[HomeController::class,'contact']);

