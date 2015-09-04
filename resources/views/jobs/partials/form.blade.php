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

<div class="form-group">
{!! Form::label('jobs_nome', 'Nome do Job', ['class' => 'control-label']) !!}
{!! Form::text('jobs_nome', null, ['class' => 'form-control', 'id' => 'jobs_nome']) !!}
</div>

<div class="form-group">
{!! Form::label('jobs_responsavel', 'Responsavel', ['class' => 'control-label']) !!}
{!! Form::text('jobs_responsavel', null, ['class' => 'form-control', 'id' => 'jobs_responsavel']) !!}
</div>

<div class="form-group">
{!! Form::label('jobs_cliente', 'Cliente', ['class' => 'control-label']) !!}
{!! Form::text('jobs_cliente', null, ['class' => 'form-control', 'id' => 'jobs_cliente']) !!}
</div>

<button class="btn btn-primary" type="submit">Salvar</button>