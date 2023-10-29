<?php

use App\Http\Controllers\Application;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' =>'auth'], function(){
    Route::get('/', [MainController::class, 'Main'])->name('main');
    Route::get('/dashboard', [ MainController::class, 'dashboard'])->name('dashboard');
    Route::resource('application', Application::class);
});






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
