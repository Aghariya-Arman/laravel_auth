<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::POST('saveUser', [UserController::class, 'registeruser'])->name('saveUser');
Route::view('login', 'login')->name('login');
Route::POST('loginmatch', [UserController::class, 'login'])->name('loginmatch');
Route::get('dashboard', [UserController::class, 'dashbordpage'])->name('dashboard')->middleware(ValidUser::class);
Route::get('logout', [UserController::class, 'logout'])->name('logout');
