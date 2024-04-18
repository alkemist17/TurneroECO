<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TurneroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/video_player', function () {
    return view('video');
})->name('videoPlayer');

Route::get('/turnero', [TurneroController::class, 'index'])->name('turnero');