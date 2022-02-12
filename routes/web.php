<?php

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/dashboard', function () {
    $users = User::get(['name', 'email']);  
    return view('dashboard', ['users'=>$users]);
})->middleware(['auth'])->name('dashboard');

Route::get('/admin/panel', function(){

    $admins = Admin::get(['name', 'email']);  
    return view('admin.panel', ['admins'=>$admins]);

})->name('admin.panel')->middleware(['admin']);

require __DIR__.'/auth.php';
