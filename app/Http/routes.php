<?php

/**
* Jobs
*/
Route::get('/jobs', ['uses' => 'JobsController@index']);
Route::get('/jobs/novo', ['uses' => 'JobsController@create']);
Route::post('/jobs/inserir', ['uses' => 'JobsController@store']);

Route::get('/', function () {
    return redirect('jobs'); // REDIRECIONA E MANTEM O ENDERECO

});