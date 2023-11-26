<?php

use App\Http\Controllers\ProductController;
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

Route::get('/urunler', [ProductController::class, 'index']);
Route::get('/urunler/ekle', [ProductController::class, 'create']);
Route::post('/urunler/ekle', [ProductController::class, 'store']);
Route::get('/urunler/duzenle/{id}', [ProductController::class, 'edit']);
Route::post('/urunler/duzenle/{id}', [ProductController::class, 'update']);
Route::get('/urunler/sil/{id}', [ProductController::class, 'destroy']);