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

Route::get('/token', function () {
    return csrf_token();
});



Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::group(['namespace' => 'User', 'middleware' => 'auth:web'], function () {
        Route::view('/', 'home')->name('home');
        Route::resource('/isikuisoner', 'IsiKuisonerController');
    });

    // Route::group(['prefix' => '/data-ukuisoner', 'as' => 'data-ukuisoner.', 'namespace' => 'pertanyaan'], function () {

    // });
});


require __DIR__ . '/demo.php';
