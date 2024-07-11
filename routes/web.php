<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaskesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Jenis_FaskesController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\ProfileController;
use App\Models\Jenis_Faskes;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [IndexController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified', 'role:admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    #jenis faskes
    Route::get('/jenis_faskes', [Jenis_FaskesController::class, 'index'])->name('jenis_faskes.index');
    Route::get('/jenis_faskes/create', [Jenis_FaskesController::class, "create"])->name('jenis_faskes.create');
    Route::post('/jenis_faskes/store', [Jenis_FaskesController::class, "store"])->name('jenis_faskes.store');
    Route::delete('/jenis_faskes/delete/{id}', [Jenis_FaskesController::class, "delete"])->name('jenis_faskes.delete');
    Route::get('/jenis_faskes/edit/{id}', [Jenis_FaskesController::class, "edit"])->name('jenis_faskes.edit');


    #provinsi
    Route::get('/provinsi', [ProvinsiController::class, 'index'])->name('provinsi.index');
    Route::get('/provinsi/create', [ProvinsiController::class, "create"])->name('provinsi.create');
    Route::post('/provinsi/store', [ProvinsiController::class, "store"])->name('provinsi.store');
    Route::delete('/provinsi/delete/{id}', [ProvinsiController::class, "delete"])->name('provinsi.delete');
    Route::get('/provinsi/edit/{id}', [ProvinsiController::class, "edit"])->name('provinsi.edit');

    #kabkota
    Route::get('/kabkota', [KabkotaController::class, 'index'])->name('kabkota.index');
    Route::get('/kabkota/create', [KabkotaController::class, "create"])->name('kabkota.create');
    Route::post('/kabkota/store', [KabkotaController::class, "store"])->name('kabkota.store');
    Route::delete('/kabkota/delete/{id}', [KabkotaController::class, "delete"])->name('kabkota.delete');
    Route::get('/kabkota/edit/{id}', [KabkotaController::class, "edit"])->name('kabkota.edit');

    #Kategori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/kategori/create', [KategoriController::class, "create"])->name('kategori.create');
    Route::post('/kategori/store', [KategoriController::class, "store"])->name('kategori.store');
    Route::delete('/kategori/delete/{id}', [KategoriController::class, "delete"])->name('kategori.delete');
    Route::get('/kategori/edit/{id}', [KategoriController::class, "edit"])->name('kategori.edit');

    #Faskes
    

});

Route::middleware(['auth', 'verified', 'role:admin|faskes'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/faskes', [FaskesController::class, 'index'])->name('faskes.index');
    Route::get('/faskes/create', [FaskesController::class, "create"])->name('faskes.create');
    Route::post('/faskes/store', [FaskesController::class, "store"])->name('faskes.store');
    Route::post('/faskes/store2', [FaskesController::class, "store2"])->name('faskes.store2');
    Route::delete('/faskes/delete/{id}', [FaskesController::class, "delete"])->name('faskes.delete');
    Route::get('/faskes/edit/{id}', [FaskesController::class, "edit"])->name('faskes.edit');
});


require __DIR__ . '/auth.php';
