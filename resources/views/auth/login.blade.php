
@extends('layouts.login')

@section('content')

{!! Form::open(['url' => '/auth/login']) !!}
    <fieldset>
        @if(Session::has('errors'))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
        </div>
        <div class="form-group">
            <input class="form-control" placeholder="Password" name="password" type="password" value="">
        </div>
        <div class="checkbox">
            <label>
                <input name="remember" type="checkbox" value="Remember Me">Remember Me
            </label>
        </div>
        <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
    </fieldset>
{!! Form::close() !!}


@stop