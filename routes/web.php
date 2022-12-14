<?php

use Illuminate\Support\Facades\Route;

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

// Frontend
Route::get('/', \App\Http\Livewire\Homepage::class)->name('home');
Route::get('/list-menu', \App\Http\Livewire\Menu::class)->name('list-menu');
Route::get('/about', \App\Http\Livewire\About::class);
Route::get('/list-menu/{id}', \App\Http\Livewire\MenuDetail::class)->name('menu.detail');
Route::get('/keranjang', \App\Http\Livewire\Keranjang::class)->name('keranjang');
Route::get('/checkout', \App\Http\Livewire\Checkout::class)->name('checkout');
Route::get('/history', \App\Http\Livewire\History::class)->name('history');
Route::get('/info-loker', \App\Http\Livewire\Loker::class)->name('loker');

//backend
Route::get('/backend-page', [App\Http\Controllers\BackendController::class, 'index'])->name('dashboard');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->group(function () {
    Route::get('/', [App\Http\Controllers\Backend\UserController::class, 'index'])->name('user.index');
    Route::get('/create', [App\Http\Controllers\Backend\UserController::class, 'create'])->name('user.create');
    Route::post('/store', [App\Http\Controllers\Backend\UserController::class, 'store'])->name('user.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Backend\UserController::class, 'edit'])->name('user.edit');
    Route::post('/update/{id}', [App\Http\Controllers\Backend\UserController::class, 'update'])->name('user.update');
    Route::get('/destroy/{id}', [App\Http\Controllers\Backend\UserController::class, 'destroy'])->name('user.destroy');
});

// Menu
// Route::prefix('menu')->middleware('admin', 'auth')->group(function () {
Route::prefix('menu')->group(function () {
    Route::get('/', [App\Http\Controllers\Backend\MenuController::class, 'index'])->name('menu.index');
    Route::get('/create', [App\Http\Controllers\Backend\MenuController::class, 'create'])->name('menu.create');
    Route::post('/store', [App\Http\Controllers\Backend\MenuController::class, 'store'])->name('menu.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Backend\MenuController::class, 'edit'])->name('menu.edit');
    Route::post('/update/{id}', [App\Http\Controllers\Backend\MenuController::class, 'update'])->name('menu.update');
    Route::get('/destroy/{id}', [App\Http\Controllers\Backend\MenuController::class, 'destroy'])->name('menu.destroy');
});


// Pesanan
// Route::prefix('menu')->middleware('admin', 'auth')->group(function () {
Route::prefix('pesanan')->group(function () {
    Route::get('/', [App\Http\Controllers\Backend\PesananController::class, 'index'])->name('pesanan.index');
    Route::get('/detail/{id}', [App\Http\Controllers\Backend\PesananController::class, 'detail'])->name('pesanan.detail');
    Route::get('/detail-print', [App\Http\Controllers\Backend\PesananController::class, 'detailPrint'])->name('pesanan.detail-print');
    Route::get('/destroy/{id}', [App\Http\Controllers\Backend\PesananController::class, 'destroy'])->name('pesanan.destroy');
});

Route::prefix('laporan')->group(function () {
    Route::get('/', [App\Http\Controllers\Backend\LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/detail/{id}', [App\Http\Controllers\Backend\LaporanController::class, 'detail'])->name('laporan.detail');
    Route::get('/detail-print', [App\Http\Controllers\Backend\LaporanController::class, 'detailPrint'])->name('laporan.detail-print');
    Route::get('/destroy/{id}', [App\Http\Controllers\Backend\LaporanController::class, 'destroy'])->name('laporan.destroy');
});


// Loker
// Route::prefix('loekr')->middleware('admin', 'auth')->group(function () {
Route::prefix('loker')->group(function () {
    Route::get('/', [App\Http\Controllers\Backend\LokerController::class, 'index'])->name('loker.index');
    Route::get('/create', [App\Http\Controllers\Backend\LokerController::class, 'create'])->name('loker.create');
    Route::post('/store', [App\Http\Controllers\Backend\LokerController::class, 'store'])->name('loker.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Backend\LokerController::class, 'edit'])->name('loker.edit');
    Route::get('/ditempati/{id}', [App\Http\Controllers\Backend\LokerController::class, 'ditempati'])->name('loker.ditempati');
    Route::post('/update/{id}', [App\Http\Controllers\Backend\LokerController::class, 'update'])->name('loker.update');
    Route::get('/destroy/{id}', [App\Http\Controllers\Backend\LokerController::class, 'destroy'])->name('loker.destroy');
});
