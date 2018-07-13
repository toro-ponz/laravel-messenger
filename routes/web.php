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

Route::get('/', IndexController::class)->name('index');

Route::group(['namespace' => 'Contact', 'prefix' => 'contact', 'as' => 'contact.'], function () {
    Route::get('/', 'ContactsController@index')->name('index');
    Route::post('/', 'ContactsController@send')->name('send');
    Route::get('/complate', 'ContactsController@complate')->name('complate');
});
