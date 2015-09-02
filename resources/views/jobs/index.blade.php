<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>	
			<td>Nome</td>
			<td>Cliente</td>
			<td>Reponsavel</td>
		</tr>
		
		@foreach($jobs as $job)
		<tr>	
			<td>{!! $job->jobs_nome !!}</td>
			<td>{!! $job->jobs_cliente !!} </td>
			<td>{!! $job->jobs_responsavel !!} </td>
		</tr>
		@endforeach
		
	</table>	
</body>
</html>