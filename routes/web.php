<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerhitungController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view ('pages.dashboard');
});
Route::get('/kehadiran/{id}', function () {
    return 'hadir bu';
});
Route::get('/admin/dashboard', function () {
    return view('index');
});

route::get('/hitung', [BerhitungController::class, 'hitung']);

route::post('/kirim', [TestController::class, 'kirim']);
route::get('/daftar', [TestController::class, 'daftar']);
route::get('/dashboard', [DashboardController::class, 'index']);
route::get('/siswa', [SiswaController::class, 'index']);

//route siswa
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/tambahdatasiswa', [SiswaController::class, 'tambahdatasiswa']);
Route::post('/siswa', [SiswaController::class, 'index']);


