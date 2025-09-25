<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'))->name('welcome');
Route::get('/login', fn () => view('auth.login'))->name('login');
