<?php

use App\Http\Controllers\Admin\AuditInvestigasiController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PelimpahanController;
use App\Http\Controllers\Admin\PenelahaanController;
use App\Http\Controllers\Admin\PengaduanController;
use App\Http\Controllers\Admin\TercatatController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
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

Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin'], function () {
    Route::get('/', [HomeController::class, 'home']);
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::resource('/pengaduan', PengaduanController::class);
    Route::resource('/tercatat', TercatatController::class)->only(['index', 'edit', 'update']);
    Route::resource('/penelahaan', PenelahaanController::class)->only(['index', 'edit', 'update']);
    Route::resource('/audit-investigasi', AuditInvestigasiController::class)->only(['index', 'edit', 'update']);
    Route::resource('/pelimpahan', PelimpahanController::class)->only(['index', 'edit', 'update']);

    Route::get('/logout', [SessionsController::class, 'destroy']);
    Route::get('/user-profile', [InfoUserController::class, 'create']);
    Route::post('/user-profile', [InfoUserController::class, 'store']);
});

Route::group(['middleware' => 'guest', 'prefix' => 'admin'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
    Route::get('/login/forgot-password', [ResetController::class, 'create']);
    Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
    Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
    Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

Route::get('/', [ControllersHomeController::class, 'home']);

Route::get('/pengaduan/masyarakat', [ControllersHomeController::class, 'masyarakat']);
Route::post('/pengaduan/masyarakat', [ControllersHomeController::class, 'daftar']);

Route::get('/pengaduan/pegawai', [ControllersHomeController::class, 'pegawai']);
Route::post('/pengaduan/pegawai', [ControllersHomeController::class, 'daftar']);

Route::get('/login', [ControllersHomeController::class, 'login'])->name('login');
Route::post('/login', [ControllersHomeController::class, 'post_login']);
Route::get('/lupa-password', [ControllersHomeController::class, 'lupaPassword']);
Route::get('/logout', [ControllersHomeController::class, 'logout'])->middleware('auth');

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function () {
    Route::get('/', [ControllersHomeController::class, 'dashboard']);
    Route::get('/pengaduan', [ControllersHomeController::class, 'pengaduan']);
    Route::post('/pengaduan', [ControllersHomeController::class, 'post_pengaduan']);
    Route::get('/pengaduan/{id}', [ControllersHomeController::class, 'view_pengaduan']);
    Route::get('/pengaduan/{id}/batal', [ControllersHomeController::class, 'cancel_pengaduan']);
});
