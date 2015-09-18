<?php

/**
* Exercícios
* 1. Comentar o código com o seu entendimento sobre como as coisas são feitas
* 2. Desenvolver uma segunda funcionalidade, identica à primeira. Anotar as dúvidas.
*/

/**
* Jobs
*/
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'jobs'], function () {
        Route::get('', ['as' => 'jobs.index', 'uses' => 'JobsController@index']);
        Route::get('novo', ['as' => 'jobs.create', 'uses' => 'JobsController@create']);
        Route::post('inserir', ['as' => 'jobs.store', 'uses' => 'JobsController@store']);
        Route::get('{id}/editar', ['as' => 'jobs.edit', 'uses' => 'JobsController@edit']);
        Route::post('{id}/atualizar', ['as' => 'jobs.update', 'uses' => 'JobsController@update']);
        Route::get('{id}/excluir', ['as' => 'jobs.destroy', 'uses' => 'JobsController@destroy']);
    });
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', function () {
    return redirect('jobs'); // REDIRECIONA E MANTEM O ENDERECO
});
