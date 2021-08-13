<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function() {
    Route::get('/', [GuestController::class, 'index'])->name('index');
    Route::get('/kunjungan', [GuestController::class, 'create'])->name('guest');
    Route::post('/kunjungan', [GuestController::class, 'store'])->name('guest');

    Route::post('logout', LogoutController::class)->name('logout');
});

Route::middleware('guest')->group(function() {

    Route::get('register', [RegistrationController::class, 'create'])->name('register');
    Route::post('register', [RegistrationController::class, 'store']);
    
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']);

});

