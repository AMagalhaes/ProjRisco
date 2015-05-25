<?php

Route::group(['middleware' => 'auth'], function () {
    // Home
    Route::get('/', 'HomeController@index');

    //Activos
    Route::resource('activo', 'ActivoController');

    //Graficos
    Route::resource('charts', 'ChartController');

    // Riscos
    Route::resource('risco', 'RiscoController', ['except' => 'create']);

    // Activos - Riscos
    Route::resource('activo.risco', 'ActivoRiscoController');

    // Risco - Tratamento
    Route::resource('risco.trata', 'TratamentoController');

    // Tratamento
    Route::resource('trata', 'TratamentoController');

    // Analise
    Route::resource('activo.risco.tratamento', 'ActivoRiscoTratamentoController');

    //Informações
    Route::resource('infoInicio', 'infoController@index');


});

// Auth
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
