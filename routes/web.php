<?php

use App\Models\Ayam;
use App\Models\Pakan;
use App\Models\Penjualan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AyamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PakanController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PenjualanAyamController;
use App\Http\Controllers\PenjualanPakanController;
use App\Http\Controllers\TPKController; // Pastikan TPKController di-import

// Route untuk halaman welcome
Route::get('/', function () {
    return view('welcome');
})->name('welcome'); // Menambahkan nama route welcome

// Route untuk halaman ayam
Route::get('/ayam', function () {
    $ayams = Ayam::all();
    return view('ayam', ['ayams' => $ayams]);
});
// AyamController routes
Route::post('/create-ayam', [AyamController::class,'createAyam']);
Route::get('/edit-ayam/{ayam}',[AyamController::class, 'showEditScreen']);
Route::put('/edit-ayam/{ayam}',[AyamController::class,'actuallyUpdateAyam']);
Route::delete('/delete-ayam/{ayam}', [AyamController::class, 'deleteAyam']);

// Tambahkan route untuk halaman ayambaru
Route::get('/ayambaru', [AyamController::class, 'indexAyamBaru']);

// Penjualan routes
Route::get('/penjualan', function () {
    $penjualans = Penjualan::all();
    return view('penjualan', ['penjualans' => $penjualans]);
});
// PenjualanController routes
Route::post('/create-penjualan', [PenjualanController::class,'createPenjualan']);
Route::get('/edit-penjualan/{penjualan}',[PenjualanController::class, 'showEditScreen']);
Route::put('/edit-penjualan/{penjualan}', [PenjualanController::class, 'actuallyUpdatePenjualan']);
Route::delete('/delete-penjualan/{penjualan}', [PenjualanController::class, 'deletePenjualan']);

// Pakan routes
Route::get('/pakan', function () {
    $pakans = Pakan::all();
    return view('pakan', ['pakan' => $pakans]);
});
Route::post('/pakanbaru', [PakanController::class, 'createPakan']);
Route::get('/edit-pakan/{pakan}', [PakanController::class, 'showEditScreen']);
Route::put('/edit-pakan/{pakan}', [PakanController::class, 'actuallyUpdatePakan']);
Route::delete('/delete-pakan/{pakan}', [PakanController::class, 'deletePakan']);

// Tambahkan route untuk halaman pakanbaru
Route::get('/pakanbaru', function () {
    $pakans = Pakan::all(); // Mengambil semua data pakan
    return view('pakanbaru', ['pakans' => $pakans]); // Mengirimkan data pakan ke view
});

// Login and Register routes
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

// Penjualan Ayam routes
Route::get('/penjualan-ayam', [PenjualanAyamController::class, 'index']);
Route::post('/create-penjualan-ayam', [PenjualanAyamController::class, 'store']);
Route::delete('/delete-penjualan-ayam/{id}', [PenjualanAyamController::class, 'destroy']);
Route::get('/edit-penjualan-ayam/{id}', [PenjualanAyamController::class, 'edit'])->name('edit-penjualan-ayam');
Route::post('/update-penjualan-ayam/{id}', [PenjualanAyamController::class, 'update'])->name('update-penjualan-ayam');

// Penjualan Pakan routes
Route::get('/penjualan-pakan', [PenjualanPakanController::class, 'index']);
Route::post('/penjualan-pakan', [PenjualanPakanController::class, 'store']);
Route::delete('/penjualan-pakan/{id}', [PenjualanPakanController::class, 'destroy']);

// TPK routes
Route::get('/tpk', [TPKController::class, 'index'])->name('tpk.index'); // Route untuk halaman TPK

// Route untuk mengarahkan kembali ke halaman pakan
Route::get('/back-to-welcome', function () {
    return redirect()->route('welcome');
});
