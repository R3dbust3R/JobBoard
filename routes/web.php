<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobListingController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/job-listing', [JobListingController::class, 'index'])->name('job-listing.index');
Route::get('/employers', [EmployerController::class, 'index'])->name('employer.index');
Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('/user/settings', [UserController::class, 'settings'])->name('user.settings');
Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');




