<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';
require __DIR__.'./dashboard.php';

Route::view('/', 'index');

Route::view('Banido', 'ban')->name('ban');