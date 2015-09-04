<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use App\Http\Controllers\Controller;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $jobs = \App\Job::all();

        return view('jobs.index')->with("jobs", $jobs); // NÃO SE USA BARRA PARA SEPARAR PASTA DE ARQUIVO
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(JobRequest $request)
    {
        $input = $request->all();

        $job = new \App\Job;

        $job->jobs_nome  = $input["jobs_nome"];
        $job->jobs_responsavel = $input["jobs_responsavel"];
        $job->jobs_cliente = $input["jobs_cliente"];

        $job->save(); // SALVA NO BD

        return back()->with('success', 'Job incluido com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $job = \App\Job::find($id);

        return view('jobs.edit')->with('job', $job);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(JobRequest $request, $id)
    {
        $input = $request->all();

        $job = \App\Job::find($id);

        $job->jobs_nome  = $input["jobs_nome"];
        $job->jobs_responsavel = $input["jobs_responsavel"];
        $job->jobs_cliente = $input["jobs_cliente"];

        $job->save();

        return back()->with('success', 'Job atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
