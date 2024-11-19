<?php

use App\Models\Ayam;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AyamController;

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

