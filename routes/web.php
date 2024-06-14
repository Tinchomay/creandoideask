<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboarController;
use App\Http\Controllers\ManualidadeController;
use App\Http\Controllers\PinataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SomosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboarController::class, 'index'])->name('dashboard');
Route::get('/nosotros', [SomosController::class, 'index'])->name('nosotros');

Route::get('/pinatas', [PinataController::class, 'index'])->name('pinatas');
Route::get('/manualidades', [ManualidadeController::class, 'index'])->name('manualidades');
Route::get('/pinatas/{pinata}', [PinataController::class, 'show'])->name('pinatas.show');
Route::get('/manualidades/{manualidade}', [ManualidadeController::class, 'show'])->name('manualidades.show');

//Admin
Route::get('/admin/', [AdminController::class, 'index'])->middleware('auth')->name('admin.index');
Route::get('/admin/pinatas', [AdminController::class, 'pinatas'])->middleware('auth')->name('admin.pinatas');
Route::get('/admin/manualidades', [AdminController::class, 'manualidades'])->middleware('auth')->name('admin.manualidades');

Route::get('/admin/pinatas/create', [PinataController::class, 'create'])->middleware('auth')->name('pinatas.create');
Route::get('/admin/manualidades/create', [ManualidadeController::class, 'create'])->middleware('auth')->name('manualidades.create');

Route::get('/admin/pinatas/{pinata}/edit', [AdminController::class, 'editPinata'])->middleware('auth')->name('pinatas.edit');
Route::get('/admin/manualidades/{manualidade}/edit', [AdminController::class, 'editManualidad'])->middleware('auth')->name('manualidades.edit');

//
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
