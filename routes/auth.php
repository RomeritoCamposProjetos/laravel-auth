<?php

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminRegisterController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

//Auth routes for regular users 

Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');

//Auth routes for admin users

Route::get('/login/admin', [function (){
    return view('auth.admin.login');
}])->name('admin.login')->middleware(['guest:admin']);

Route::post('/login/admin', [AdminLoginController::class, 'store'])
    ->middleware('guest:admin');

Route::post('/admin/logout', [AdminLoginController::class, 'destroy'])
    ->name('admin.logout');

Route::get('/register/admin', [AdminLoginController::class, 'create'])
    ->name('admin.register');

Route::post('/register/admin', [
    AdminRegisterController::class, 'store'
]);

