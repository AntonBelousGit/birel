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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/companies', [App\Http\Controllers\HomeController::class, 'companies'])->name('companies');
Route::get('/companies/new', [App\Http\Controllers\HomeController::class, 'addcompany'])->name('addcompany');
Route::post('/info', [App\Http\Controllers\HomeController::class, 'info'])->name('info');