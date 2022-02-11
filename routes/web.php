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

Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
Route::get('/mission', [App\Http\Controllers\MainController::class, 'mission'])->name('mission');
Route::get('/explore', [App\Http\Controllers\MainController::class, 'explore'])->name('explore');

Auth::routes();
require('_admin.php');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/companies', App\Http\Controllers\CompanyController::class);
Route::post('/update', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::post('/changepass', [App\Http\Controllers\HomeController::class, 'changepass'])->name('changepass');
