@extends('layouts.main')

@section('pageTitle')
- Jobs - Novo job
@stop

@section('content')

    {!! Form::model($job, ['url' => '/jobs/'. $job->id .'/atualizar']) !!}

        @include('jobs.partials.form')

    {!! Form::close() !!}

<a href="/jobs">voltar</a>

@stop