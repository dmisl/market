<?php

use App\Http\Controllers\AdminPanel;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('autocomplete', [HomeController::class, 'autocomplete'])->name('autocomplete');

Route::get('search', [SearchController::class, 'index'])->name('search');

Route::prefix('profile')
->middleware('auth')
->group(function () {
        
    Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('logout', [ProfileController::class, 'logout'])->name('profile.logout');

});

Route::middleware('guest')
->group(function () {

    Route::get('login', [LoginController::class, 'index'])->name('login.index');
    Route::post('login', [LoginController::class, 'store'])->name('login.store');
    Route::get('register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');

});

Route::prefix('admin')
->middleware('admin')
->group(function () {

    Route::get('/', [AdminPanel::class, 'index'])->name('admin.index');

    Route::get('users', [AdminPanel::class, 'users_index'])->name('admin.users.index');
    Route::get('users/{id}', [AdminPanel::class, 'users_show'])->name('admin.users.show');
    Route::put('users', [AdminPanel::class, 'users_update'])->name('admin.users.update');

    Route::get('products', [AdminPanel::class, 'products_index'])->name('admin.products.index');
    Route::get('products/{id}', [AdminPanel::class, 'products_show'])->name('admin.products.show');
    
    Route::get('stats', [AdminPanel::class, 'stats'])->name('admin.stats');
});