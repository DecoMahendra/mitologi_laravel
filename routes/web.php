<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/dashboard', function () { return view('auth.dashboard'); })->middleware('auth')->name('dashboard');
    Route::get('/about', function () { return view('auth.about'); })->middleware('auth')->name('about');
    Route::get('/portofolio', function () { return view('auth.portofolio'); })->middleware('auth')->name('portofolio');
    Route::get('/caraorder', function () { return view('auth.caraorder'); })->middleware('auth')->name('caraorder');
    Route::get('/faq', function () { return view('auth.faq'); })->middleware('auth')->name('faq');
    Route::get('/kontak', function () { return view('auth.kontak'); })->middleware('auth')->name('kontak');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.show');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
    Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');

Route::get('/produk-static', [ProdukController::class, 'index'])->name('produk.static');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});

require __DIR__.'/auth.php';
