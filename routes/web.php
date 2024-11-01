<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/base', function () {
    return view('Layouts.Base');
});

Route::get('/dashboard', function () {
    return view('Admin.dashboard');
});


Route::get('pegawai.edit', [pegawaiController::class, 'edit'])->name('edit');
Route::get('pegawai.tambah', [pegawaiController::class, 'tambah'])->name('tambah');


Route::get('/pegawai', [PegawaiController::class, 'index'])->name('getalldataPegawai');
Route::post('/pegawai/create', [PegawaiController::class, 'createData'])->name('createDataPegawai');

Route::get('/pegawai/get/{id}', [PegawaiController::class, 'getDataById'])->name('getDataByIdPegawai');
Route::post('/pegawai/update/{id}', [PegawaiController::class, 'updateData'])->name('updateDataPegawai');
Route::delete('/pegawai/delete/{id}', [PegawaiController::class, 'deleteData'])->name('deleteDataPegawai');





