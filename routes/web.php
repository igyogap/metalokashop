<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')
    ->namespace('App\Http\Controllers')
    ->group(function(){
        Route::get('/', 'DashboardAdminController@index')->name('dashboard');
    });

Route::prefix('engineer')
    ->namespace('App\Http\Controllers')
    ->group(function(){
        Route::get('/', 'DashboardEngineerController@index')->name('dashboard');
        Route::get('/shop', 'ShopController@index')->name('shop');
    });