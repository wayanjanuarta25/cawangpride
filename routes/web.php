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
    
    // Manajemen Barang
    Route::resource('barang', BarangController::class);
    Route::get('/barang/{barang}', [BarangController::class, 'show'])->name('barang.show');


    // Transaksi
    Route::resource('barang_masuk', BarangMasukController::class);
    Route::resource('barang_keluar', BarangKeluarController::class);



    // Data Master
    Route::resource('gudang', GudangController::class);
    Route::resource('subjenis', SubJenisController::class);
    Route::resource('subsubjenis', SubSubJenisController::class);
    Route::resource('jenismateriil', JenisMateriilController::class);
    Route::resource('status', StatusController::class);

    Route::get('/subsubjenis/getBySubJenis', [SubSubJenisController::class, 'getBySubJenis'])->name('subsubjenis.getBySubJenis');
    Route::get('/get-sub-jenis/{jenis_materiil_id}', [BarangController::class, 'getSubJenis']);
    Route::get('/get-sub-sub-jenis/{sub_jenis_id}', [BarangController::class, 'getSubSubJenis']);


    // Manajemen User
    Route::resource('/users', UserController::class);

    // Stok Barang
    Route::get('/stok_barang', [StokBarangController::class, 'index'])->name('stok_barang.index');
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
