@extends('layouts.main')

@section('pageTitle')
- Jobs - Novo job
@stop

@section('content')

    {!! Form::model($job,
        ['url' => '/jobs/'. $job->id .'/atualizar']) !!}

        @if(Session::has('success'))
            <div class="alert alert-success">{!! Session::get('success') !!}</div>
        @endif

        @if(Session::has('errors'))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @include('jobs.partials.form')

    {!! Form::close() !!}

<a href="/jobs">voltar</a>

@stop