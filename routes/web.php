<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataTransaksiController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginLogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransaksiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



// auth
Route::get('/login', [LoginLogoutController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginLogoutController::class, 'store'])->name('storelogin');
Route::post('/logout', [LoginLogoutController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'regisUser'])->name('storeregister');


// user
Route::get('/home', [LandingController::class, 'index'])->name('landing')->middleware('auth');
Route::get('/transaksi/{tbpaketcuci:id}', [TransaksiController::class, 'index'])->name('transaksi')->middleware('auth');
Route::post('/transaksi/{tbpaketcuci:id}', [TransaksiController::class, 'store'])->name('storetransaksi')->middleware('auth');
Route::get('/profil', [ProfileController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/profil/edit/{tbuser:id}', [ProfileController::class, 'edit'])->name('editprofil')->middleware('auth');
Route::put('/profil/update/{tbuser:id}', [ProfileController::class, 'update'])->name('updateprofil')->middleware('auth');


// admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/datauser', [DataUserController::class, 'index'])->name('datauser')->middleware('auth');
Route::get('/datauser/tambah', [DataUserController::class, 'create'])->name('tambahuser')->middleware('auth');
Route::post('/datauser/tambah', [DataUserController::class, 'store'])->name('buatuser')->middleware('auth');
Route::delete('/datauser/hapus/{tbuser:id}', [DataUserController::class, 'destroy'])->name('hapususer')->middleware('auth');
Route::get('/datauser/edit/{tbuser:id}', [DataUserController::class, 'edit'])->name('edituser')->middleware('auth');
Route::put('/datauser/update/{tbuser:id}', [DataUserController::class, 'update'])->name('updateuser')->middleware('auth');
Route::get('/datatransaksi', [DataTransaksiController::class, 'index'])->name('datatransaksi')->middleware('auth');
Route::get('/datatransaksi/pdf', [DataTransaksiController::class, 'pdf'])->name('export')->middleware('auth');
