<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

//Activos
Route::resource('activo', 'ActivoController');

// Riscos
Route::resource('risco', 'RiscoController', ['except' => 'create']);

// Activos - Riscos
Route::resource('activo.risco', 'ActivoRiscoController');

// Risco - Tratamento
Route::resource('risco.trata', 'TratamentoController');

// Tratamento
Route::resource('trata', 'TratamentoController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
