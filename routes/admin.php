<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    require base_path('vendor/laravel/fortify/routes/routes.php');
    Route::resource('/setting', 'SettingController');


    Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
        Route::get('/', function () {
            return redirect(route('admin.dashboard'));
        });

        Route::view('/dashboard', 'pages.admin.dashboard')->name('dashboard');

        Route::resource('/admin', 'AdminController');
        Route::resource('/user', 'UserController');


        Route::group(['prefix' => '/data-kuisoner', 'as' => 'data-kuisoner.', 'namespace' => 'Kuisoner'], function () {
            Route::resource('/kuisoner', 'KuisonerController');
            Route::resource('/isikuisoner', 'IsiKuisonerController');
        });

        Route::group(['prefix' => '/data-laporan', 'as' => 'data-laporan.', 'namespace' => 'Laporan'], function () {
            Route::resource('/dataisikuisoner', 'DataIsiKuisonerController');
        });
    });
});
