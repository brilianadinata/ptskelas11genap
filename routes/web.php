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
    return view ('landingpage');
});
Route::get('/dashhboard', function () {
    return view ('pages.dashboard');
})->middleware('auth');

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

Route::middleware(['auth', 'admin'])->group(function () {
    // ...
    route::get('/siswa', [SiswaController::class, 'index']);
    
    //route siswa
    Route::get('/siswa', [SiswaController::class, 'index']);
    Route::get('/tambahdatasiswa', [SiswaController::class, 'tambahdatasiswa']);
    Route::post('/siswa', [SiswaController::class, 'index']);
});

//route kategori
Route::resource('kategori', KategoriController::class);

//route landing page
Route::resource('/landing', LandingController::class);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
