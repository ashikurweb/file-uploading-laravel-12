<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::controller(FileController::class)->group(function () {
    Route::post('/upload', 'store')->name('file.upload');
});
