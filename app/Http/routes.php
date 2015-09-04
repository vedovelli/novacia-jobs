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

Route::get('/', function () {
    return redirect('jobs'); // REDIRECIONA E MANTEM O ENDERECO

});

Route::get('/jobs', function () {
    $jobs = \App\Job::all();
    return view('jobs.index')->with("jobs", $jobs); // NÃO SE USA BARRA PARA SEPARAR PASTA DE ARQUIVO
});

Route::get('/jobs/novo', function () {

    return view('jobs.form');
});

Route::post('/jobs/inserir', function () {
    $input = \Request::all();

    $job = new \App\Job;

    $job->jobs_nome  = $input["jobs_nome"];
    $job->jobs_responsavel = $input["jobs_responsavel"];
    $job->jobs_cliente = $input["jobs_cliente"];

    $job->save(); // SALVA NO BD
    return back()->with('success', 'Job incluido com sucesso!');
});