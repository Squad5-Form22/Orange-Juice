<?php

use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\DashboardCommon;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrailController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\TrailAdmin;

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
    return view('landing_page');
});

Route::get('/eventos', function() {
    return view('eventos');
});

Route::get('/user', function() {
    return view('user');
});

Route::get('/redefinir', function() {
    return view('redefinir');
});

Route::get('/editar', function() {
    return view('editar');
});



Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('/admin/dashboard', DashboardAdmin::class)->name('admin.dashboard');
    Route::get('/admin/trail/{trail_id}', [TrailAdmin::class, 'index'])->name('admin.trail');
    Route::post('/logout', [loginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', DashboardCommon::class)->name('dashboard');
    
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
    Route::get('/trail/{trail_id}', [TrailController::class, 'index'])->name('trail');

    Route::get('/content/{id}', [ContentController::class, 'updateContentStatus'])->name('updateContentStatus');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store'])->name('register');

    Route::post('/login', [LoginController::class, 'signin'])->name('login');
    Route::get('/login', [LoginController::class, 'login'])->name('login.form');
});


