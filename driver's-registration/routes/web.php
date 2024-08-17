<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;

Route::get('/', function () {
    return view('home.index');
});
Route::get('/index',[HomeController::class,'index']);
Route::get('/driver_registration',[SalesController::class,'driver_registration']);
Route::post('/driver_form',[SalesController::class,'driver_form']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
