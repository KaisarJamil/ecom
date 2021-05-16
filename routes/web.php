<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/dashboard', [AdminController::class,'index'])->name('admin.dashboard');
Route::get('super/admin/dashboard', [SuperAdminController::class,'index'])->name('superadmin.dashboard');

Route::resource('/tests',TestController::class);

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('userprofile', function () {
    if ( Gate::allows('user-only', Auth::user())) {
        
        return view('userprofile');
    } else {
        return view('welcome');
    }
});

/*
Route::get('dashboard', function () {
    if ( Gate::allows('admin-only', Auth::user())) {
        
        return view('dashboard');
    } else {
        return view('welcome');
    }
});
*/