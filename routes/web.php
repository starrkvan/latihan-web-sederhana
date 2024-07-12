<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Siswadata\SiswadataController;

Route::get('/', [SiswadataController::class, 'index'])->name('home');
route::post('/tambah', [SiswadataController::class, 'store'])->name('tambah.post');
Route::get('/edit/{id}', [SiswadataController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [SiswadataController::class, 'update'])->name('update');
Route::delete('/update/{id}', [SiswadataController::class, 'destroy'])->name('delete');

Route::get('/tambah', function () {
    return view('tambah');
});
