@extends('layouts.main')

@section('pageTitle')
- Jobs - Novo job
@stop

@section('content')

    <h1>
        <i class="fa fa-edit"></i>
        Jobs
    </h1>

    {!! Form::open(['url' => '/jobs/inserir']) !!}

        @include('jobs.partials.form')

    {!! Form::close() !!}

<a href="/jobs">voltar</a>

@stop