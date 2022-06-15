<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'status'])->group(function(){

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::controller(App\Http\Controllers\ControllerUser::class)->prefix('dashboard')->group(function()
    {
        Route::get('/controler-usuarios', 'index')->name('index');
        Route::post('/delete', 'destroy')->name('destroy');
    });

});


