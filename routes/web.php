<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\SubJenisController;
use App\Http\Controllers\SubSubJenisController;
use App\Http\Controllers\JenisMateriilController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\StokBarangController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// Redirect setelah login
Route::middleware(['auth'])->get('/redirect', function () {
    $user = Auth::user();

    if ($user->hasRole('superadmin')) {
        return redirect()->route('dashboard.superadmin');
    } elseif ($user->hasRole('admin')) {
        return redirect()->route('dashboard.admin');
    }

    return redirect()->route('dashboard');
});

// Dashboard utama
Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    return redirect('/redirect');
})->name('dashboard');

// Profile Routes
Route::middleware(['auth'])->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });
});

// Superadmin Routes
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/dashboard/superadmin', [SuperadminController::class, 'index'])->name('dashboard.superadmin');
    Route::resource('users', UserController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('barang_masuk', BarangMasukController::class);
    Route::resource('barang_keluar', BarangKeluarController::class);
    Route::resource('gudang', GudangController::class);
    Route::resource('subjenis', SubJenisController::class);
    Route::resource('subsubjenis', SubSubJenisController::class);
    Route::resource('jenismateriil', JenisMateriilController::class);
    Route::resource('status', StatusController::class);
    Route::get('/stok_barang', [StokBarangController::class, 'index'])->name('stok_barang.index');
});

// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard.admin');
    Route::resource('barang_masuk', BarangMasukController::class)->only(['index', 'show']);
    Route::resource('barang_keluar', BarangKeluarController::class)->only(['index', 'show']);
});

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';
