<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Programar Cita</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme-->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/	bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
			<link  href="{{('css/estilo.css')}}" rel="stylesheet">
</head>
<body style="background:#80BFFF"><!--
		<form method="post" action="/"  style="background:#010101">-->
		 {!! Form::open(['route' => 'imp.store', 'method' => 'POST', 'files'=> true]) !!}
			<h2><span style="color:#FAF502">Solicitar impresion</h2>
			<input type="text" placeholder="&#128393; Nombre" required="required" name="nombre">
			<input type="text" placeholder="&#128393; Apellido" required="required" name="apellido">
			<input type="text" placeholder="&#128379; Telefono" required="required" name="telefono">
			<input type="email" placeholder="&#128197; Email" required="required" name="email">
			<h2>

					{{ Form::file('archivo'), 'required'}}
<!--
   	  <input type="hidden" name="MAX_FILE_SIZE" value="100000">
   	  <br>
   	  <br>
   	  <b><span style="color:#F9F9F3">Enviar un nuevo archivo: </b>
   	  <br>
   	  <input name="userfile" type="file" style="color:#F9F9F3" required data-validation-require-message="elija su archivo">
      <p class="help-block text-danger"></p>
   	  <br>
-->



			<input type="submit" value="Registrar">

	<!--	</form>-->
{!! Form::close() !!}

</body>

	<FOOTER>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</FOOTER>

</html>
