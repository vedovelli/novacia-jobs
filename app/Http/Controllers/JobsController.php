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
        $jobs = \App\Job::with('responsavel')->paginate(10);

        return view('jobs.index')->with("jobs", $jobs); // NÃO SE USA BARRA PARA SEPARAR PASTA DE ARQUIVO
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $users = \App\User::all();

        $users = $users->lists('name', 'id');

        return view('jobs.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(JobRequest $request)
    {
        $job = new \App\Job;

        $job->fill($request->all()); // mass assignment

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
        $job = \App\Job::with('responsavel')->find($id);

        $users = \App\User::all();

        $users = $users->lists('name', 'id');

        return view('jobs.edit')->with(compact('job', 'users'));
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
        $job = \App\Job::find($id);

        $job->fill($request->all());

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
        $job = \App\Job::find($id);

        $job->delete();

        return back()->with('success', 'Job removido com sucesso!');
    }
}
