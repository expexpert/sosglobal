<?php

// Super Admin
Route::group(['middleware' => 'auth','prefix' => 'admin'], function(){
    Route::get('/', [App\Http\Controllers\backend\AdminController::class, 'index'])->name('admin');
    Route::resource('customers', App\Http\Controllers\backend\CustomerController::class);
    Route::resource('category', App\Http\Controllers\backend\CategoryController::class);

    
    Route::resource('profile', App\Http\Controllers\backend\ProfileController::class);

});
