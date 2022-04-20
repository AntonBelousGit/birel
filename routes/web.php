<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
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
require('_clear.php');

Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/mission',  'mission')->name('mission');
    Route::get('/explore', 'explore')->name('explore');
    Route::get('/terms-of-use', 'termsOfUse')->name('terms-of-use');
});

Auth::routes();

require('_admin.php');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/companies', App\Http\Controllers\CompanyController::class);
Route::get('/companies/{company}/get-finance/', [App\Http\Controllers\CompanyController::class, 'getFinance'])->name('company.get-finance');
Route::post('/companies/wali', [App\Http\Controllers\CompanyController::class, 'wali'])->name('wali');
Route::post('/companies/wali-delete/{id}', [App\Http\Controllers\CompanyController::class, 'deleteWali'])->name('delete-wali');




Route::controller(HomeController::class)->group(function () {
    Route::get('/orders', 'orders')->name('orders');
    Route::get('/add-order', 'addOrder')->name('add-order');
    Route::post('/update', 'update')->name('update');
    Route::post('/changepass', 'changepass')->name('changepass');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
