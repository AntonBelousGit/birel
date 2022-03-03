<?php

use Illuminate\Support\Facades\Artisan;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Database\Schema\Blueprint;


Route::get('clear', function () {

    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');

    return 'cleared';
});
Route::get('composer', function () {

    if (shell_exec('composer dump-autoload')) {
        return 'yes';
    } else {
        return 'no';
    }

});

Route::get('migrate', function () {

    Artisan::call('migrate');
    return 'migrated';

});
Route::get('migrate-fresh', function () {

    Artisan::call('migrate:fresh --seed');
    return 'migrated';

});
Route::get('link', function () {

    Artisan::call('storage:link');
    return 'link ok';

});
