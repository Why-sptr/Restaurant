<?php

use App\Http\Controllers\Admin\AlertController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Landing\AboutController;
use App\Http\Controllers\Landing\BookingController;
use App\Http\Controllers\Landing\HomepageController;
use App\Http\Controllers\Landing\MenuController;
use App\Http\Controllers\Landing\ServiceController;
use App\Http\Controllers\Landing\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index'])->name('landing.homepage');
Route::get('/about', [AboutController::class, 'index'])->name('landing.about');
Route::get('/booking', [BookingController::class, 'index'])->name('landing.booking');
Route::get('/menu', [MenuController::class, 'index'])->name('landing.menu');
Route::get('/service', [ServiceController::class, 'index'])->name('landing.service');
Route::get('/team', [TeamController::class, 'index'])->name('landing.team');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admins.dashboard');
Route::get('/calendar', [CalendarController::class, 'index'])->name('admins.calendar');
Route::get('/alert', [AlertController::class, 'index'])->name('admins.alert');
Route::get('/form', [FormController::class, 'index'])->name('admins.form');
Route::get('/table', [TableController::class, 'index'])->name('admins.table');
Route::get('/login', [AuthController::class, 'index'])->name('admins.login');

