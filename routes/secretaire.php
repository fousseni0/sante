<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['secretaire']], function () {
    //route page d'acceuill
    Route::get('secretaire/dashbord', [App\Http\Controllers\HomeController::class, 'secretaireDashboard'])->name('secretaire.home');

});