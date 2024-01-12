<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;

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
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [AuthController::class, 'index'])->name('home');
    Route::get('/login', [AuthController::class, 'index'])->name('login.index');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::group(['middleware' => ['my.auth', 'admin']], function () {
    Route::group(['controller' => DashboardController::class, 'prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/judul', 'judul')->name('judul');
        Route::get('/rnd', 'rnd')->name('rnd');
    });
});
Route::group(['middleware' => ['my.auth', 'superadmin']], function () {
    Route::group(['controller' => DashboardController::class, 'prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/category', 'category')->name('category');
        Route::get('/judul', 'judul')->name('judul');
        Route::get('/materi', 'materi')->name('materi');
        Route::get('/materi/{id}', 'materi_detail')->name('materi.detail');
        Route::get('/rnd', 'rnd')->name('rnd');
    });
});
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::group(['middleware' => ['my.auth', 'student']], function () {
    Route::group(['controller' => StudentController::class, 'prefix' => 'student', 'as' => 'student.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('/kual', 'kual')->name('kual');
        Route::get('/kuan', 'kuan')->name('kuan');
        Route::get('/rnd', 'rnd')->name('rnd');
    });
 });
