@extends('layouts.main')

@section('pageTitle')
- Jobs - Novo job
@stop

@section('content')

    {!! Form::open(['url' => '/jobs/inserir']) !!}

        @include('jobs.partials.form')

    {!! Form::close() !!}

<a href="/jobs">voltar</a>

@stop