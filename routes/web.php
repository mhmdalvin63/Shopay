<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PetugasController;

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

Route::get('/', function () {return view('login');});

// D A T A   K E L A S  
Route::get('kelas',[KelasController::class,'index'])->name('kelas_index');
Route::get('kelas/create',[KelasController::class,'create'])->name('kelas_create');
Route::post('kelas/store',[KelasController::class,'store'])->name('kelas_store');
Route::get('kelas/edit/{id}',[KelasController::class,'edit'])->name('kelas_edit');
Route::put('kelas/update/{id}',[KelasController::class,'update'])->name('kelas_update');
Route::get('kelas/show/{id}',[KelasController::class,'show'])->name('kelas_show');
Route::delete('kelas/delete/{id}',[KelasController::class,'destroy'])->name('kelas_delete');

// D A T A   K E L A S  
Route::get('petugas',[PetugasController::class,'index'])->name('petugas_index');
Route::get('petugas/create',[PetugasController::class,'create'])->name('petugas_create');
Route::post('petugas/store',[PetugasController::class,'store'])->name('petugas_store');
Route::get('petugas/edit/{id}',[PetugasController::class,'edit'])->name('petugas_edit');
Route::put('petugas/update/{id}',[PetugasController::class,'update'])->name('petugas_update');
Route::get('petugas/show/{id}',[PetugasController::class,'show'])->name('petugas_show');
Route::delete('petugas/delete/{id}',[PetugasController::class,'destroy'])->name('petugas_delete');
