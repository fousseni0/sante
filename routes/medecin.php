<?php

use Illuminate\Support\Facades\Route;

//toutes les routes des medecins
Route::group(['middleware' => ['medecin']], function () {
    //route page d'acceuill
    Route::get('medecin/dashbord', [App\Http\Controllers\HomeController::class, 'medecinDashboard'])->name('medecin.home');
    
    
    //test de fonctionnalite des middleware
    Route::get('medecin/test', [App\Http\Controllers\HomeController::class, 'testmed'])->name('medecin.test');

});