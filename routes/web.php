<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\userController;
use App\Models\Transaksi;
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
    return view('index');
})->name('home');



Route::get('/login', function () {
    return view('auth.login');
})->name('signin')->middleware('guest');


Route::get('/admin', [DashboardController::class,'index']
)->name('admin')->middleware('auth');

Route::get('/register', function () {
    return view('auth.register');
})->name('signup');

Route::post('/register',[userController::class,'register'])->name('register');
Route::post('/login',[userController::class,'login'])->name('login');
Route::get('/logout',[userController::class,'logout'])->name('logout');

Route::get('member', [MemberController::class, 'index'])->name('member');
Route::post('member', [MemberController::class, 'store'])->name('member.store');
Route::post('/transaksi',[TransaksiController::class,'store'])->name('transaksi');
Route::get('/transaksi',[TransaksiController::class,'index'])->name('tampiltransaksi');

Route::post('/pengeluaran',[PengeluaranController::class,'store'])->name('pengeluaran');
Route::get('/pengeluaran',[PengeluaranController::class,'index'])->name('tampilpengeluaran');

Route::post('/search',[TransaksiController::class,'search'])->name('search');
