<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::view('/', 'index');
Route::view('banido', 'ban')->name('ban');

Route::middleware(['auth', 'status'])->group(function(){

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::controller(App\Http\Controllers\ControllerUser::class)->prefix('dashboard')->group(function()
    {
        Route::get('/usuarios', 'index')->name('index');
        Route::post('/banir', 'ban')->name('banned');
        Route::post('/delete', 'destroy')->name('destroy');
    });

    Route::controller(\App\Http\Controllers\ControllerQrCode::class)->name('qrcode.')->prefix('qrcode')->group(function(){ 
        Route::view('qrcode', 'qrcode.index')->name('index');
    });

});


