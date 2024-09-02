<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home.index');
});
Route::get('/index',[HomeController::class,'index']);
Route::get('/contact',[SalesController::class,'message']);
Route::get('/about',[SalesController::class,'about']);
Route::get('/driver_registration',[SalesController::class,'driver_registration']);
Route::post('/driver_form',[SalesController::class,'driver_form']);
Route::get('/records',[SalesController::class,'records']);
Route::post('/search',[SalesController::class,'search']);
Route::get('/search_page',[SalesController::class,'search_page']);
Route::get('/asc_date',[SalesController::class,'asc_date']);
Route::get('/vechile_type',[SalesController::class,'vechile_type']);
Route::get('/driver_name',[SalesController::class,'driver_name']);
Route::post('/sent_message',[SalesController::class,'sent_message']);

Route::get('/noresult',[SalesController::class,'noresult']);
Route::post('/send-message', [SalesController::class, 'sendMessage'])->name('send.message');
Route::get('/user_message',[SalesController::class,'user_message']);

// Admin Routes
Route::get('/add_kpi', [AdminController::class,'showAddKpiForm']);
Route::post('setKpi', [AdminController::class, 'setKpi']);
Route::get('/kpi_achievements',[AdminController::class,'kpi_achievements']);
// Sales Officer Routes
Route::get('/sales-officer/kpi-dashboard', [SalesController::class, 'showKpiDashboard'])->name('salesofficer.kpiDashboard');
Route::post('/sales-officer/register-achieved-kpi', [SalesController::class, 'registerAchievedKpi'])->name('salesofficer.registerAchievedKpi');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/category_page',[AdminController::class,'category_page'])->middleware('admin');
Route::post('/add_category',[AdminController::class,'add_category']);
Route::get('/cat_delete/{id}',[AdminController::class,'cat_delete'])->middleware('admin');
Route::get('/edit_category/{id}',[AdminController::class,'edit_category'])->middleware('admin');
Route::post('/update_category/{id}',[AdminController::class,'update_category']);
Route::get('/driver_record',[AdminController::class,'driver_record'])->name('drivers.index')->middleware('admin');
Route::get('/driver_approval',[AdminController::class,'driver_approval'])->middleware('admin');
Route::post('/update/{id}',[AdminController::class,'update']);
Route::get('/delete/{id}',[AdminController::class,'delete'])->middleware('admin');
Route::get('/approve_request/{id}',[AdminController::class,'approve_request'])->middleware('admin');
Route::get('/reject_request/{id}',[AdminController::class,'reject_request'])->middleware('admin');
Route::get('/add_user',[AdminController::class,'add_user'])->middleware('admin');
Route::post('/register_user',[AdminController::class,'register_user']);
Route::get('/salesofficer',[AdminController::class,'salesofficer'])->middleware('admin');

Route::get('/view_detail/{id}',[AdminController::class,'view_detail'])->middleware('admin');
Route::get('/delete_user/{id}',[AdminController::class,'delete_user'])->middleware('admin');
Route::get('/edit_driver/{id}',[AdminController::class,'edit_driver'])->middleware('admin');
Route::get('/delete_driver/{id}',[AdminController::class,'delete_driver'])->middleware('admin');
Route::post('/update_driver/{id}',[AdminController::class,'update_driver'])->middleware('admin');

Route::get('/send_mail',[AdminController::class,'send_mail'])->middleware('admin');
Route::get('/edit_kpi/{id}', [AdminController::class, 'editKpi'])->name('admin.editKpi');

// Route for updating KPI
Route::post('/update_kpi/{id}', [AdminController::class, 'updateKpi'])->name('admin.updateKpi');

// Route for deleting KPI
Route::delete('/delete_kpi/{id}', [AdminController::class, 'deleteKpi'])->name('admin.deleteKpi');Route::post('/update_kpi/{id}', [AdminController::class, 'updateKpi'])->name('admin.updateKpi');
Route::post('/mail/{id}', [AdminController::class, 'mail']);
