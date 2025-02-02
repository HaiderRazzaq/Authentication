<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\homebladecontroller;

route::prefix('relation')->group(function () {
route::get('/user',[RelationController::class,'user']);
});

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('front')->name('front.')->group(function () {
    route::get('/', homebladecontroller::class)->name('index');
    route::view('/login', 'front.auth.login')->name('login');
    route::view('/register', 'front.auth.register')->name('register');
    route::view('/forgot', 'front.auth.forgot')->name('forgot');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
