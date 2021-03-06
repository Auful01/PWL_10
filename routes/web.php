<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PostsController;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::resource('mahasiswa', MahasiswaController::class);
Route::get('search',[PostsController::class,'search']);
Route::get('mahasiswa/nilai/{nim}', [MahasiswaController::class,'nilai'])->name('mahasiswa.nilai');
Route::get('mahasiswa/nilai/{nim}/cetak_pdf', [MahasiswaController::class,'cetak_pdf'])->name('mahasiswa.cetak_pdf');
Route::resource('articles', ArticleController::class);
Route::get('/article/cetak_pdf',[ArticleController::class,'cetak_pdf']);
