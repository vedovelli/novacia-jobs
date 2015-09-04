@extends('layouts.main')

@section('pageTitle')
- Jobs
@stop

@section('content')

<div class="row">
	<div class="col-md-6">
		<h2>Nova Cia <small>Controle de Jobs</small></h2>
	</div>
	<div class="col-md-6 text-right">
		<a href="/jobs/novo" class="btn btn-primary">Novo</a>
	</div>
</div>


<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Cliente</th>
			<th>Reponsavel</th>
			<th>Ações</th>
		</tr>
	</thead>

	<tbody>
	@foreach($jobs as $job)
		<tr>
			<td>{!! $job->jobs_nome !!}</td>
			<td>{!! $job->jobs_cliente !!} </td>
			<td>{!! $job->jobs_responsavel !!} </td>
			<td width="1%" nowrap>
				<a href="/jobs/{!! $job->id !!}/editar">editar</a> |
				<a href="/jobs/{!! $job->id !!}/excluir">excluir</a>
			</td>
		</tr>
	@endforeach
	</tbody>

</table>
@stop