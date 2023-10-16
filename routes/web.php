<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\BookGalleryController;
use App\Http\Controllers\Admin\BukuController as AdminBukuController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PenerbitController as AdminPenerbitController;
use App\Http\Controllers\Admin\PenulisController as AdminPenulisController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardBukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPeminjamanController;
use App\Http\Controllers\DashboardSettingsController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/category', [BukuController::class, 'index'])->name('category');
Route::get('/category/{id}', [BukuController::class, 'detail'])->name('category-detail');
Route::get('/penulis', [PenulisController::class, 'index'])->name('penulis');
Route::get('/penerbit', [PenerbitController::class, 'index'])->name('penerbit');
Route::get('/details/{id}', [DetailController::class, 'index'])->name('detail');
Route::post('/details/{id}', [DetailController::class, 'add'])->name('detail-add');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::delete('/cart/{id}', [CartController::class, 'delete'])->name('cart-delete');
Route::get('/success', [CartController::class, 'success'])->name('success');
Route::get('/register/success', [RegisteredUserController::class, 'success'])->name('register-success');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard/buku', [DashboardBukuController::class, 'index'])->name('dashboard-buku');
Route::get('/dashboard/buku/add', [DashboardBukuController::class, 'create'])->name('dashboard-buku-create');
Route::get('/dashboard/buku/{id}', [DashboardBukuController::class, 'detail'])->name('dashboard-buku-detail');

Route::get('/dashboard/peminjaman', [DashboardPeminjamanController::class, 'index'])->name('dashboard-peminjaman');
Route::get('/dashboard/peminjaman/{id}', [DashboardPeminjamanController::class, 'detail'])->name('dashboard-peminjaman-detail');

Route::get('/dashboard/account', [DashboardSettingsController::class, 'index'])->name('dashboard-account');

// Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin-dashboard');


Route::prefix('admin')
    ->group(function() {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('category', CategoryController::class);
        Route::resource('penulis', AdminPenulisController::class);
        Route::resource('penerbit', AdminPenerbitController::class);
        Route::resource('user', UserController::class);
        Route::resource('book', BookController::class);
        Route::resource('book-gallery', BookGalleryController::class);

    });

require __DIR__.'/auth.php';
