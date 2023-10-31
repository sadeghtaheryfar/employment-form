<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\InputsFromController;
use App\Http\Controllers\Admin\RecruitmentsController;
use App\Http\Controllers\Auth\Customer\LoginRegisterController;

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


Route::get('/', [HomeController::class,"index"])->name('home');
Route::post('/send-recruitments', [HomeController::class,"store"])->name('send-recruitments');


Route::prefix('admin')->name('admin.')->middleware('auth','VerifyAdmin')->group(function () {
    Route::get('/', HomeAdminController::class)->name('home');
    Route::resource('/recruitments', RecruitmentsController::class);
    Route::resource('/input-forms', InputsFromController::class);
});

Route::namespace('Auth.')->group(function () {
    Route::get('auth', [LoginRegisterController::class, 'loginRegisterForm'])->name('auth.customer.login-register-form');
    Route::post('auth', [LoginRegisterController::class, 'loginRegisterStore'])->name('auth.customer.login-register-store');

    
    Route::post('LougOut', [LoginRegisterController::class, 'destroy'])->name('auth.customer.destroy');

    Route::get('auth-otp/{otp}', [LoginRegisterController::class, 'loginConfirmForm'])->name('auth.customer.login-confirm-form');
    Route::post('auth-otp/{otp}', [LoginRegisterController::class, 'loginConfirmStore'])->name('auth.customer.login-confirm-store');
    Route::get('auth-otp-resend/{otp}', [LoginRegisterController::class, 'loginResendStore'])->name('auth.customer.login-resend-store');
});

require __DIR__.'/auth.php';
