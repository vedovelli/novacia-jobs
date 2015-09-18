
@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        @if(Session::has('errors'))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
              </div>
              <div class="panel-body">
                {!! Form::open(['url' => '/auth/login']) !!}

                    <div class="form-group">
                        {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'Senha', ['class' => 'control-label']) !!}
                        {!! Form::password('password', ['class' => 'form-control', 'id' => 'password']) !!}
                    </div>

                    <div>
                        <input type="checkbox" name="remember"> Remember Me
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                {!! Form::close() !!}
              </div>
            </div>
    </div>

</div>

@stop