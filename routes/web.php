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


Route::get('/', function () {
    return view('welcome');
});

// Redirect otomatis setelah login sesuai role
Route::middleware(['auth'])->get('/redirect', function () {
    $user = Auth::user();

    return match ($user->role) {
        'superadmin' => redirect()->route('dashboard.superadmin'),
        'admin'      => redirect()->route('dashboard.admin'),
        default      => redirect()->route('dashboard'),
    };
});

// Dashboard utama
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', fn() => redirect('/redirect'))->name('dashboard');

    // Profile Routes
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });
});

// **Superadmin Routes**
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/dashboard/superadmin', [SuperadminController::class, 'index'])->name('dashboard.superadmin');
    Route::get('/manage-users', [SuperadminController::class, 'manageUsers'])->name('manage.users');
    Route::get('/data-master', [SuperadminController::class, 'dataMaster'])->name('data.master');
    
    // Data Master
    Route::resource('gudang', GudangController::class);
    Route::resource('sub-jenis', SubJenisController::class);
    Route::resource('sub-sub-jenis', SubSubJenisController::class);

    // Manajemen User
    Route::resource('/users', UserController::class);
});

// **Admin Routes**
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard.admin');
});

// Logout Route
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

require __DIR__.'/auth.php';
