<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class, 'redirect'])->middleware('auth','verified');

route::get('/product_details/{id}', [HomeController::class, 'product_details']);

route::get('/show_cart', [HomeController::class, 'show_cart']);

route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);

route::get('/cash_order', [HomeController::class, 'cash_order']);

route::get('/stripe/{totalPrice}', [HomeController::class, 'stripe']);

route::post('/add_to_cart/{id}', [HomeController::class, 'add_to_cart']);

Route::post('stripe/{totalPrice}',  [HomeController::class, 'stripePost'])->name('stripe.post');

route::get('/blog', [HomeController::class, 'blog'])->name('blog');

route::get('/contact', [HomeController::class, 'contact'])->name('contact');

route::get('/products', [HomeController::class, 'products'])->name('products');

route::get('/about', [HomeController::class, 'about'])->name('about');

route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');




// Admin routes:
route::get('/view_catagory', [AdminController::class, 'view_catagory']);

route::post('/add_catagory', [AdminController::class, 'add_catagory']);

route::get('/delete_catagory/{id}', [AdminController::class, 'delete_catagory']);

route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);

route::get('/update_product/{id}', [AdminController::class, 'update_product']);

route::get('/view_product', [AdminController::class, 'view_product']);

route::get('/show_product', [AdminController::class, 'show_product']);

route::post('/add_product', [AdminController::class, 'add_product']);

route::post('/save_update_product/{id}', [AdminController::class, 'save_update_product']);

route::get('/view_orders', [AdminController::class, 'view_orders']);

route::get('/delivered/{id}', [AdminController::class, 'delivered']);
