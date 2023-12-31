<?php

use App\Livewire\Auth\Login;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function() {
    Route::get('/login', Login::class)->name('login');
});

Route::middleware('auth')->group(function() {
    Route::get('/', Home::class)->name('home');
});
