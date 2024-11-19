<?php

use App\Models\Ayam;
use App\Models\Penjualan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AyamController;
use App\Http\Controllers\PenjualanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ayam', function () {
    $ayams = Ayam::all();
    return view('ayam', ['ayams' => $ayams]); 
});

//AyamController
Route::post('/create-ayam', [AyamController::class,'createAyam']);
Route::get('/edit-ayam/{ayam}',[AyamController::class, 'showEditScreen']);
Route::put('/edit-ayam/{ayam}',[AyamController::class,'actuallyUpdateAyam']);
Route::delete('/delete-ayam/{ayam}', [AyamController::class, 'deleteAyam']);

//Penjualan
Route::get('/penjualan', function () {
    $penjualans = Penjualan::all();
    return view('penjualan', ['penjualans' => $penjualans]); 
});

//PenjualController
Route::post('/create-penjualan', [PenjualanController::class,'createPenjualan']);
Route::get('/edit-penjualan/{penjualan}',[PenjualanController::class, 'showEditScreen']);
Route::put('/edit-penjualan/{penjualan}', [PenjualanController::class, 'actuallyUpdatePenjualan']);
Route::delete('/delete-penjualan/{penjualan}', [PenjualanController::class, 'deletePenjualan']);