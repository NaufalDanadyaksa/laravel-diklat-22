<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PerumahanController;
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
    return view('layout');
});
Route::get('/nopal', function () {
    return view('tampil');
});
Route::get('/halo', function () {
    return view('tampil', [
        "nama" => "Nopal",
        "kelas" => "XI PPLG A"
    ]);
});
// Route::get('/form', function () {
//     return view('form');
// });

Route::resource('post', PostController::class);
Route::resource('/perumahan', PerumahanController::class);
Route::resource('/form', PerumahanController::class);

