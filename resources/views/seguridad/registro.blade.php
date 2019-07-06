<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div align="center" style="margin-top: 200px">
		<h1>Pnael de Registro</h1>
		<form action="">
			<a href="{{ route('seguridad.facebook', 'facebook') }}">Ingresar con Facebook</a><br><br>
			<a href="{{ route('seguridad.google', ['provider' => 'google']) }}">Ingresar con Gmail</a>
		</form>
	</div>

</body>
</html>