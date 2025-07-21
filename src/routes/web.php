<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Controllers\AuthController;
use App\Models\Buku;
use App\Http\Controllers\PinjamanController;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/

// ✅ Halaman utama
Route::get('/', function () {
    $bukus = \App\Models\Buku::all();
    return view('welcome', compact('bukus'));
})->name('home');

// ✅ Auth
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::post('/pinjam-toggle/{buku_id}', [PinjamanController::class, 'toggle'])->name('pinjam.toggle');

    // ✅ Riwayat pinjaman
    Route::get('/pinjaman-saya', [PinjamanController::class, 'myPinjaman'])->name('pinjam.index');
});