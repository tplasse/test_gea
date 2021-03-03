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

Route::get('/', function () {
    return redirect()->route('clients.index');
});

Route::resource('/clients', 'ClientController')->only(['index', 'show']);

Route::get('/mecaniciens', 'MecanicienController@index')->name('mecaniciens.index');
Route::get('/mecaniciens/{id}', 'MecanicienController@show')->name('mecaniciens.show');

Route::resource('/voitures', 'VoitureController')->only(['index', 'show', 'update']);
