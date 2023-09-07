<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitoyenController;
use App\Http\Controllers\ExtraitController;
use App\Http\Controllers\DecesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');
Route::get('/citoyen', 'CitoyenController@index')->name('citoyen');
Route::get('/extrait', 'ExtraitController@index')->name('extrait');
Route::get('/deces', 'DecesController@index')->name('deces');
Route::get('/mariage', 'MariageController@index')->name('mariage');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/chartjs', function () {
    return view('chartjs');
});


Route::controller(CitoyenController::class)->prefix('gestion')->group(function(){
    Route::get('','citoyen')->name('gestion');
    Route::get('create','create')->name('gestion.create');
    Route::get('store','store')->name('gestion.store');

});
