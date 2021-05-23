<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DosenController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/halamanutama', function () {
    return view('halamanutama');
});
Route::get('/', function () {
    return view('home');
});

route::view('/dosen','dosen');
route::view('/about','about');
route::view('/mahasiswa','mahasiswa');
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/mahasiswa', [HomeController::class, 'mhs']);
