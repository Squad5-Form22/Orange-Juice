<?php

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

/* -- página de registro -- */
Route::get('/', function() {
    return view('register');
});

/* -- página de login -- */
Route::get('/login', function() {
    return view('login');
});

/* -- página inicial de adm -- */
Route::get('/dashboard', function() {
    return view('dashboard');
});

/*-- página inicial -- */
Route::get('/user', function() {
    return view('user');
});