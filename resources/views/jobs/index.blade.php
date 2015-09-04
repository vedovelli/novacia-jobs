<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>

	<div class="container">

		<h2>Nova Cia <small>Controle de Jobs</small></h2>

		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Cliente</th>
					<th>Reponsavel</th>
				</tr>
			</thead>

			<tbody>
			@foreach($jobs as $job)
				<tr>
					<td>{!! $job->jobs_nome !!}</td>
					<td>{!! $job->jobs_cliente !!} </td>
					<td>{!! $job->jobs_responsavel !!} </td>
				</tr>
			@endforeach
			</tbody>

		</table>
	</div>

</body>
</html>