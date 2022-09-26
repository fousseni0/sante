<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['admin']], function () {
    //route page d'acceuill
    Route::get('admin/dashbord', [App\Http\Controllers\HomeController::class, 'adminDashboard'])->name('admin.home');

});