<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Job</title>
</head>
<body>
		<form action="/jobs/inserir" method="post">
			<input type="hidden" name="id" >
			<input type="hidden" name="_token" value="{!! csrf_token() !!}" >
			<label for="nome">NOME</label>
			<input type="text" value="" name="jobs_nome"> <br>
			<label for="Reponsavel">REPONSAVEL</label>
			<input type="text" value="" name="jobs_reponsavel"> <br>
			<label for="cliente">CLIENTE</label>
			<input type="text" value="" name="jobs_cliente"> <br>

			<input type="submit" value="Salvar" >
		</form>
</body>
</html>