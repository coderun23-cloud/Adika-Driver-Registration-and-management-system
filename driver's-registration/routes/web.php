<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;

Route::get('/', function () {
    return view('home.index');
});
Route::get('/index',[HomeController::class,'index']);
Route::get('/contact',[SalesController::class,'contact']);
Route::get('/about',[SalesController::class,'about']);
Route::get('/driver_registration',[SalesController::class,'driver_registration']);
Route::post('/driver_form',[SalesController::class,'driver_form']);
Route::get('/records',[SalesController::class,'records']);
Route::post('/search',[SalesController::class,'search']);
Route::get('/search_page',[SalesController::class,'search_page']);
Route::get('/asc_date',[SalesController::class,'asc_date']);
Route::get('/vechile_type',[SalesController::class,'vechile_type']);
Route::get('/driver_name',[SalesController::class,'driver_name']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
