<?php
use App\Http\Controllers\EventController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('events', EventController::class);

Route::get('/front', function () {
    return view('front.tour');
});
