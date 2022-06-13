<?php

use App\Http\Controllers\ControllerUser;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::controller(ControllerUser::class)->prefix('dashboard')->group(function()
    {
        Route::get('/controler-usuarios', 'index')->name('index');
    });

});