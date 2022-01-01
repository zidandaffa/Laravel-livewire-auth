<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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


Route::group(['middleware'=> 'guest'], function(){
    // register
    Route::livewire('/daftar', 'auth.register')
    ->layout('layouts.app')->name('auth.register');

    // login
    Route::livewire('/', 'auth.login')
    ->layout('layouts.app')->name('auth.login');
});

// router membutuhkan login
Route::group(['middleware' => 'auth'], function(){
    Route::livewire('/admin/dashboard', 'admin.dashboard')
    ->layout('layouts.app')->name('admin.dashboard');
});