<?php

use App\Http\Controllers\Frontend\Order\ManageOrderController;
use App\Http\Controllers\Frontend\Question\QuestionController;
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
    Route::get('/mission', 'mission')->name('mission');
    Route::get('/explore', 'explore')->name('explore');
    Route::get('/terms-of-use', 'termsOfUse')->name('terms-of-use');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'user']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/companies', App\Http\Controllers\CompanyController::class);
    Route::get('/companies/{company}/get-finance/', [App\Http\Controllers\CompanyController::class, 'getFinance'])->name('company.get-finance');
    Route::post('/companies/wali', [App\Http\Controllers\CompanyController::class, 'wali'])->name('wali');
    Route::post('/companies/wali-delete/{id}', [App\Http\Controllers\CompanyController::class, 'deleteWali'])->name('delete-wali');


    Route::controller(HomeController::class)->group(function () {
        Route::get('/orders', 'orders')->name('orders');
        Route::post('/update', 'update')->name('update');
        Route::post('/changepass', 'changepass')->name('changepass');
    });

//ORDERS
    Route::resource('order-lc', ManageOrderController::class)->except(['index', 'destroy']);

    Route::controller(ManageOrderController::class)->middleware('auth')->group(function () {
        Route::get('/order/{type?}', 'addOrder')->name('order');
        Route::post('/order/', 'storeOrder')->name('store-order');
    });

//Question popup
    Route::post('/question', QuestionController::class)->name('frontend-question');

});
