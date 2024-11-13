<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/supplier/tambah_data', [App\Http\Controllers\SupplierController::class, 'tambah_data']);

//route simpan data
Route::post('/supplier/simpan_data', [App\Http\Controllers\SupplierController::class, 'simpan_data']);

Route::get('/supplier/tampil_data', [App\Http\Controllers\supplierController::class, 'tampil_data']);

//route edit data
Route::get('/supplier/edit_data/{id}', [App\Http\Controllers\supplierController::class, 'edit_data']);

//update data
Route::post('/supplier/update_data', [App\Http\Controllers\supplierController::class, 'update_data']);

Route::get('/supplier/hapus_data/{id}', [App\Http\Controllers\supplierController::class, 'hapus_data']);
