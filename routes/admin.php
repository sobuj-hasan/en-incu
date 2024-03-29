<?php

use Illuminate\Support\Facades\Route;


// Admin panel Routes
Route::group(['namespace' => 'Admin', 'middleware' => 'admin'], function () {

    Route::get('admin/dashboard', 'DashboardController@index')->name('admin.index');

    Route::resources([
        'users' => 'UserController',
        'categories' => 'CategoryController',
        'products' => 'ProductController',
        'admin/orders' => 'OrdershowController',
        'admin/subscriber' => 'SubscribeController',
        'admin/visitor/querstion' => 'VisitorQueryController',
    ]);

    Route::get('admin/profile', 'ProfileController@index')->name('admin.user.profile');
    Route::get('admin/profile/edit', 'ProfileController@edit')->name('admin.user.profile.edit');
    Route::post('admin/profile/update', 'ProfileController@update')->name('admin.user.profile.update');
    Route::get('admin/setting', 'ProfileController@setting')->name('admin.user.setting');
    Route::post('admin/setting/update', 'ProfileController@changepassword')->name('admin.user.setting.update');
});
