<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/services', [App\Http\Controllers\SalonServiceController::class, 'index']);
Route::post('/services', [App\Http\Controllers\SalonServiceController::class, 'store']);
Route::get('/services/staff', [App\Http\Controllers\SalonStaffController::class, 'index']);
Route::post('/services/staff', [App\Http\Controllers\SalonStaffController::class, 'create']);
Route::get('/services/assign', [App\Http\Controllers\StaffServiceController::class, 'index']);
Route::post('/services/assign', [App\Http\Controllers\StaffServiceController::class, 'store']);
Route::get('/services/daily', [App\Http\Controllers\DailyServiceController::class, 'index']);
Route::post('/services/daily', [App\Http\Controllers\DailyServiceController::class, 'store']);
Route::get('/services/expense', [App\Http\Controllers\SalonExpenseController::class, 'index']);
Route::post('/services/expense', [App\Http\Controllers\SalonExpenseController::class, 'store']);
Route::get('/services/expense/daily', [App\Http\Controllers\DailyExpenseController::class, 'index']);
Route::post('/services/expense/daily', [App\Http\Controllers\DailyExpenseController::class, 'store']);
Route::get('/services/report', [App\Http\Controllers\DailyServiceController::class, 'transactions']);
Route::get('/services/report/commission', [App\Http\Controllers\DailyServiceController::class, 'commission']);