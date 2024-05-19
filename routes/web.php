<?php

use App\Http\Controllers\admin\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\EmployeeController;
use App\Http\Controllers\admin\ServiceReservationController;



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

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::resource('/users',UserController::class);
Route::resource('/employees',EmployeeController::class);
Route::resource('/service-reservations', ServiceReservationController::class);
Route::resource('/orders', OrderController::class);

