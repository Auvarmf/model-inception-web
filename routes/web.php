<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
    return view('home', [
        'title' => 'Model Inception',
    ]);
});

// Route::get('/mahasiswa', function () {
//     return view('home-user', [
//         'title' => 'CNN | Mahasiswa',
//         'subtitle' => 'Mahasiswa',
//         'name' => 'Auvar Mahsa Fahlevi',
//         'npm' => '2117051027',
//         'role' => 'Mahasiswa',
//         'jurusan' => 'Ilmu Komputer',
//         'prodi' => 'S1 Ilmu Komputer'
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
