<?php

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

Route::resource('students', StudentController::class);
Route::get('/santri/biodata', [StudentController::class, 'biodata'])->name('biodata');
Route::group(['middleware' => ['role:santri_baru']], function () {
    Route::get('/santri/registrasi-lembaga', [TamuController::class, 'regLembaga'])->name('tamu.reg-lembaga');
    Route::post('/santri/registrasi-lembaga', [TamuController::class, 'storeLembaga'])->name('tamu.reg-lembaga');
    Route::get('/santri/upload-foto', [TamuController::class, 'uploadFoto'])->name('tamu.upload-foto');
});
