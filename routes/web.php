<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\UserController;

Route::get('/vote', [UserController::class, 'showForm'])->name('vote.form');
Route::post('/vote', [UserController::class, 'submitForm'])->name('vote.submit');
