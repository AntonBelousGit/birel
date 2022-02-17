<?php

use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Company\CompanyController;
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
    });
