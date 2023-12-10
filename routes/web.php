<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterLogin;

use App\Http\Controllers\MasterLoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleMasterController;

Route::get('/master-login', [MasterLoginController::class, 'index']);
Route::get('/order', [OrderController::class, 'index']);
// Route::get('/users', [UserController::class, 'index'])->name('user.name');


Route::resource('users', UserController::class);
Route::post('delete-user', [UserController::class,'destroy']);
Route::get('users-list', [UserController::class,'getdata'])->name('users.list');


Route::resource('rolemasters', RoleMasterController::class);
Route::post('delete-rolemasters', [RoleMasterController::class,'destroy']);
Route::get('rolemasters-list', [RoleMasterController::class,'getdata'])->name('rolemasters.list');


Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
