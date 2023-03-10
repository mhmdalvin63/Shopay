<?php

use App\Http\Controllers\Front\SiswaFrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PembayaranController;

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

Route::get('/UI',[SiswaFrontController::class,'PembayaranUser']);
Route::get('/UI-id', function () {return view('UI-Siswa-detail');});

// D A T A   K E L A S  
Route::get('kelas',[KelasController::class,'index'])->name('kelas_index');
Route::get('kelas/create',[KelasController::class,'create'])->name('kelas_create');
Route::post('kelas/store',[KelasController::class,'store'])->name('kelas_store');
Route::get('kelas/edit/{id}',[KelasController::class,'edit'])->name('kelas_edit');
Route::put('kelas/update/{id}',[KelasController::class,'update'])->name('kelas_update');
Route::get('kelas/show/{id}',[KelasController::class,'show'])->name('kelas_show');
Route::delete('kelas/delete/{id}',[KelasController::class,'destroy'])->name('kelas_delete');

// D A T A   P E T U G A S 
Route::get('petugas',[PetugasController::class,'index'])->name('petugas_index');
Route::get('petugas/create',[PetugasController::class,'create'])->name('petugas_create');
Route::post('petugas/store',[PetugasController::class,'store'])->name('petugas_store');
Route::get('petugas/edit/{id}',[PetugasController::class,'edit'])->name('petugas_edit');
Route::put('petugas/update/{id}',[PetugasController::class,'update'])->name('petugas_update');
Route::get('petugas/show/{id}',[PetugasController::class,'show'])->name('petugas_show');
Route::delete('petugas/delete/{id}',[PetugasController::class,'destroy'])->name('petugas_delete');

// D A T A   S P P  
Route::get('spp',[SppController::class,'index'])->name('spp_index');
Route::get('spp/create',[SppController::class,'create'])->name('spp_create');
Route::post('spp/store',[SppController::class,'store'])->name('spp_store');
Route::get('spp/edit/{id}',[SppController::class,'edit'])->name('spp_edit');
Route::put('spp/update/{id}',[SppController::class,'update'])->name('spp_update');
Route::get('spp/show/{id}',[SppController::class,'show'])->name('spp_show');
Route::delete('spp/delete/{id}',[SppController::class,'destroy'])->name('spp_delete');

// D A T A   S I S W A
Route::get('siswa',[SiswaController::class,'index'])->name('siswa_index');
Route::get('siswa/create',[SiswaController::class,'create'])->name('siswa_create');
Route::post('siswa/store',[SiswaController::class,'store'])->name('siswa_store');
Route::get('siswa/edit/{id}',[SiswaController::class,'edit'])->name('siswa_edit');
Route::put('siswa/update/{id}',[SiswaController::class,'update'])->name('siswa_update');
Route::get('siswa/show/{id}',[SiswaController::class,'show'])->name('siswa_show');
Route::delete('siswa/delete/{id}',[SiswaController::class,'destroy'])->name('siswa_delete');

// D A T A  P E M B A Y A R A N
Route::get('pembayaran',[PembayaranController::class,'index_siswa'])->name('pembayaran_index');
Route::get('pembayaran/show/{id}',[PembayaranController::class,'show_siswa'])->name('pembayaran_show');
Route::get('pembayaran/create',[PembayaranController::class,'create'])->name('pembayaran_create');
Route::post('pembayaran/store',[PembayaranController::class,'store'])->name('pembayaran_store');
Route::get('pembayaran/edit/{id}',[PembayaranController::class,'edit'])->name('pembayaran_edit');
Route::put('pembayaran/update/{id}',[PembayaranController::class,'update'])->name('pembayaran_update');
Route::delete('pembayaran/delete/{id}',[PembayaranController::class,'destroy'])->name('pembayaran_delete');

// D A T A   H I S T O R Y
// Route::get('/history', function () {return view('History.index');});
Route::get('history',[PembayaranController::class,'show_history'])->name('history_index');
// Route::get('history/create',[HistoryController::class,'create'])->name('history_create');
// Route::post('history/store',[HistoryController::class,'store'])->name('history_store');
// Route::get('history/edit/{id}',[HistoryController::class,'edit'])->name('history_edit');
// Route::put('history/update/{id}',[HistoryController::class,'update'])->name('history_update');
// Route::get('history/show/{id}',[HistoryController::class,'show'])->name('history_show');
// Route::delete('history/delete/{id}',[HistoryController::class,'destroy'])->name('history_delete');
