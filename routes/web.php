<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBarangController;
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

Route::get('/data_barang/{id}',[DataBarangController::class, 'Index']);

Route::get('/create', [DataBarangController::class, 'create']);
Route::post('/store', [DataBarangController::class, 'store']);
Route::get('/hasil',[DataBarangController::class, 'index']);