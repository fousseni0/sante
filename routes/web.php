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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

//inclusion du fichier de routinng de l'administrateur
require __DIR__ . '/admin.php';

//inclusion du fichier de routinng pour un medecin
require __DIR__ . '/medecin.php';


//inclusion du fichier de routinng pour un secretaire
require __DIR__ . '/secretaire.php';
