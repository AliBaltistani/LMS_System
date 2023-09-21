<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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
 
Route::view('/', 'Registrations.login')->name('login');
Route::post('/user/auth', [AuthController::class, 'authLogin'])->name('user.auth');
Route::view('user/register','Registrations.register')->name('register');

Route::view('/user/forgot/password', 'Registrations.reset-password')->name('forgot.password');
Route::post('/user/check/email', [AuthController::class, 'checkEmail'])->name('forgot.check.email');
Route::get('/reset/{token}', [AuthController::class, 'resetPassword']);
Route::post('/reset/{token}', [AuthController::class, 'ChnagePassword']);
 
Route::get('/user/logout', [AuthController::class, 'logout'])->name('user.logout');

Route::group(['middleware'=> 'admin'],function(){
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');     
});

Route::group(['middleware'=> 'teacher'],function(){
    Route::get('/teacher/dashboard', [DashboardController::class, 'dashboard'])->name('teacher.dashboard');     
        
});

Route::group(['middleware'=> 'student'],function(){
        Route::get('/student/dashboard', [DashboardController::class, 'dashboard'])->name('student.dashboard');         
});

Route::group(['middleware'=> 'parent'],function(){
    Route::get('/parent/dashboard', [DashboardController::class, 'dashboard'])->name('parent.dashboard');      
});



