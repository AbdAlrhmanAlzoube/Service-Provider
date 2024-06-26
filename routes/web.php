<?php

use App\Http\Controllers\admin\ConnectController;
use App\Http\Controllers\admin\EmployeeController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ServiceReservationController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Customer\ContactController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\LoginController;
use App\Http\Controllers\Customer\RegisterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [CustomerController::class, 'index']);
Route::get('/shop', [CustomerController::class, 'shop'])->name('view-reservations');
Route::get('/party/{id}', [CustomerController::class, 'show_party'])->name('show-party');


Route::get('/party/{id}/order', [CustomerController::class, 'show_order_form'])->name('show-order-form')->middleware('auth');
Route::post('/party/{id}/order', [CustomerController::class, 'place_order'])->name('place-order')->middleware('auth');

// مشان اذا المستخدم طلب من عنا قبل مرة يطلعله الاوردر
Route::get('/view_order', [CustomerController::class, 'viewOrder'])->name('view_order')->middleware('auth');

//اظهار صفحة تواصل معنا ما بدها تسجيل دخول
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');

// لاضافة التقيمات
Route::post('/order/{order}/evaluate', [CustomerController::class, 'submitEvaluation'])->name('submit-evaluation')->middleware('auth');

Route::view('/evaluation','customer.pages.evaluation')->name('evaluation');

Route::prefix('user')->group(function (){
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('user.login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('user.logout');
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('user.register');
    Route::post('register', [RegisterController::class, 'register'])->name('register.submit');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('/users', UserController::class);
    Route::resource('/employees', EmployeeController::class);
    Route::resource('/service-reservations', ServiceReservationController::class);
    Route::resource('/orders', OrderController::class);
    Route::resource('/connects', ConnectController::class);
});
require __DIR__.'/auth.php';
