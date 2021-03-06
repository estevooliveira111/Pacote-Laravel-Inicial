<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::view('/', 'public.index')->name('home');
Route::view('banido', 'public.ban')->name('ban');

Route::middleware(['auth', 'status'])->group(function(){

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::controller(App\Http\Controllers\ControllerUser::class)->prefix('dashboard')->group(function()
    {
        Route::get('/usuarios', 'index')->name('index');
        Route::post('/banir', 'ban')->name('banned');
        Route::post('/delete', 'destroy')->name('destroy');
    });

});


