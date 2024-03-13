<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//backend route
// Route::get('/admin', [AdminController::class, 'index']);
Route::get('/login',[AdminController::class,'index']);
Route::get('/dashboard', [SuperAdminController::class, 'dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'showDashboard']);


//fontend route
Route::get('/', [HomeController::class, 'index']);

