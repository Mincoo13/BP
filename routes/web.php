<?php

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

Route::get('/', 'HomeController@index');
Route::get('/harmonogram', 'HomeController@harmonogram');
Route::get('/posts', 'HomeController@posts');
Route::get('/technologie', 'HomeController@technologies');
Route::get('/zdroje', 'HomeController@sources');
Route::get('/na-stiahnutie', 'HomeController@downloads');

Route::group(['prefix' => 'cms'], function() {
    $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    $this->post('login', 'Auth\LoginController@login');
    $this->post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', 'DashboardController@index');
        Route::get('/posts', 'PostController@index');
        Route::resources([
            'posts' => 'PostController',
            'harmonogram' => 'HarmonogramController',
            'downloads' => 'DownloadsController',
            'sources' => 'SourcesController',
        ]);
    });
    });
