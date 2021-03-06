<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Company\CompanyController;
use App\Http\Controllers\Admin\Company\Finance\CompanyFinanceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Notification\AdminNotificationController;
use App\Http\Controllers\Admin\Order\OrderController;
use App\Http\Controllers\Admin\Question\QuestionController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Admin\User\UserController;
use Illuminate\Support\Facades\Route;


Route::get('login', [AuthController::class, 'index'])->name('admin.login');
Route::post('login_process', [AuthController::class, 'login'])->name('admin.login_process');

Route::group(['middleware' => 'is_admin'], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::resources(
        [
            'users' => UserController::class,
            'company' => CompanyController::class,
            'category' => CategoryController::class,
        ]
    );

    Route::resource('question', QuestionController::class)->except(['show', 'create', 'store']);
    Route::resource('orders', OrderController::class)->except(['show', 'index']);
    Route::get('/orders/{type?}', [OrderController::class, 'index'])->name('admin-orders');
    Route::patch('/orders/updateLfo/{order}', [OrderController::class, 'updateLFO'])->name('update-lfo');

    Route::controller(CompanyFinanceController::class)->group(function () {
        Route::get('company/{id}/financing', 'index')->name('company.id.financing');
        Route::get('company/{company}/financing/create', 'create')->name('company.id.financing.create');
        Route::post('company/{company}/financing/store', 'store')->name('company.id.financing.store');
        Route::get('company/{company}/financing/{companyFinance}/edit', 'edit')->name('company.id.financing.edit');
        Route::patch('company/{company}/financing/{companyFinance}/update', 'update')->name('company.id.financing.update');
    });

    Route::controller(SettingController::class)->prefix('setting')->group(function () {
        Route::get('/all','index')->name('settings');
        Route::patch('{setting}', 'updateSetting')->name('setting-update');
    });

    Route::controller(AdminNotificationController::class)->prefix('notification')->group(function () {
        Route::get('/','index')->name('notification');
        Route::post('/','sendNotification')->name('notification.send');
    });
});
