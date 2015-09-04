<?php

/**
* Jobs
*/
Route::get('/jobs', ['uses' => 'JobsController@index']);
Route::get('/jobs/novo', ['uses' => 'JobsController@create']);
Route::get('/jobs/{id}/editar', ['uses' => 'JobsController@edit']);
Route::post('/jobs/{id}/atualizar', ['uses' => 'JobsController@update']);
Route::get('/jobs/{id}/excluir', ['uses' => 'JobsController@destroy']);
Route::post('/jobs/inserir', ['uses' => 'JobsController@store']);

Route::get('/', function () {
    return redirect('jobs'); // REDIRECIONA E MANTEM O ENDERECO

});