<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/order', function () {
    return view('order.form');
})->name('order.form');

Route::post('/order', function (Request $request) {
    return redirect()->route('products.index')->with('success' );
})->name('order.submit');

Route::get('/about', function () {
    return view('about');
})->name('about');

use App\Http\Controllers\{
    AuthController,
    ProductController,
    CartController,
    OrderController,
    UserController,
    ContactController,
    ProfileController,
    HomeController,
    PaintingController,
};

Auth::routes();

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products', [PaintingController::class, 'index'])->name('products.index');

Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');

    Route::get('/checkout', [OrderController::class, 'create'])->name('checkout.create');
    Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.store');

    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::resource('products', ProductController::class);

Route::get('/home', function () {
    return view('home');

Route::middleware(['auth'])->group(function () {
   
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/', [HomeController::class, 'index']);
});

  
});

