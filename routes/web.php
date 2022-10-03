<?php

use App\Http\Controllers\Admin\SantriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Tamu\TamuController;

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
    return inertia('Auth/Login');
    // return inertia('Dashboard/tamu2');
});
Route::get('/try', function () {
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::name('admin.')->group(function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('santri', SantriController::class);
    });
});
Route::get('/santri/biodata', [StudentController::class, 'biodata'])->name('biodata');
Route::resource('students', StudentController::class);
Route::group(['middleware' => ['role:santri_baru']], function () {
    Route::get('/santri/registrasi-lembaga', [StudentController::class, 'regLembaga'])->name('santri.reg-lembaga');
    Route::post('/santri/registrasi-lembaga', [StudentController::class, 'storeLembaga'])->name('santri.reg-lembaga');
    Route::get('/santri/upload-foto', [StudentController::class, 'uploadFoto'])->name('santri.upload-foto');
    Route::post('/santri/upload-foto', [StudentController::class, 'storeFoto'])->name('santri.store-foto');
    Route::get('/santri/pilih-metode-pembayaran', [StudentController::class, 'pilihMetodePembayaran'])->name('santri.pilih-metode-pembayaran');
});
