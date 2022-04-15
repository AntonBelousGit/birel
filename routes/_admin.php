<?php

use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Company\CompanyController;
use App\Http\Controllers\Admin\Company\Finance\CompanyFinanceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\User\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth', 'prefix' => 'admin'],
    function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');

        Route::resources(
            [
                'users'=> UserController::class,
                'company'=> CompanyController::class,
                'category'=> CategoryController::class,
            ]
        );

        Route::controller(CompanyFinanceController::class)->group(function (){
            Route::get('company/{id}/financing','index')->name('company.id.financing');
            Route::get('company/{company}/financing/create','create')->name('company.id.financing.create');
            Route::post('company/{company}/financing/store','store')->name('company.id.financing.store');
            Route::get('company/{company}/financing/{companyFinance}/edit','edit')->name('company.id.financing.edit');
        });
    });
