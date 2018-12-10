





<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Agregar Pelicula</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>

	<section class="container-fluid col col" >
			<div class="form-group">
		<form method="post" action="agregarPelicula.php" >
		<div>
			<label>Titulo</label>
			<input type="text" name="title" class="form-control">
		</div>
		<div>
			<label>Rating</label>
			<input type="text" name="rating" class="form-control" >
		</div>
		<div>
			<label>Premios</label>
			<input type="text" name="awards" class="form-control" >
		</div>
		<div>
			<label>Duracion</label>
			<input type="text" name="length" class="form-control">
		</div>
		<div>
			<label>Generos</label>
			<select name="genre_id" class="form-control">
			
				
					<option value=""></option>
			
			</select>

		</div>
		<div>
			<label>Fecha de Estreno</label> <br>
			<i>Año: </i>
			<select name="year" class="form-control">
				
					<option value=""></option>
				
			</select>
			<i>Mes: </i>
			<select name="month" class="form-control">
				
					<option value=""></option>
			
			</select>
			<i>Día: </i>
			<select name="day" class="form-control">
				
					<option value=""></option>
			
			</select>
		</div>
		<button type="submit">Guardar película</button>
	</form>

	</div>
	</section>	

	

<a href="verPeliculas.php">Volver</a>

</body>

</html>
