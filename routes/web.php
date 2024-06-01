<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TopUpController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\NavigationController;

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

Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/', function () {
//     return view('AdminTopUp');
// });

// Route::get('/login', function () {
//     return view('login');
// });



//route untuk navigasi
Route::get('/topup', [NavigationController::class, 'topUpView'])->name('topup');
Route::get('/admin', [NavigationController::class, 'adminLoginView'])->name('login');
Route::get('/joki', [NavigationController::class, 'jokiView'])->name('joki');

//route untuk transaksi
Route::post('/transasksi/topup', [NavigationController::class, 'transaksiTopUpview'])->name('topup-transaksi');
Route::post('/transaksi/joki', [NavigationController::class, 'transaksiJokiView'])->name('joki-transaksi');

//route unutk admin
Route::get('/admin', [NavigationController::class, 'adminLoginView'])->name('login');
Route::post('/admin/auth', [NavigationController::class, 'loginProsesView'])->name('login-auth');
Route::get('/admin/topup', [NavigationController::class, 'adminTopUpView'])->name('topUpReport');
Route::get('/admin/joki', [NavigationController::class, 'adminJokiView'])->name('jokiReport');



