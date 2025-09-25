<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', fn() => view('welcome'))->name('welcome');

Route::get('/login', fn() => Auth::check()
    ? redirect()->route('dashboard')
    : view('auth.login'))->name('login');
    
Route::get('/dashboard', fn() => view('dashboard.index'))->middleware(['auth'])->name('dashboard');
