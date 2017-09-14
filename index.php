
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IMC</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Montserrat" rel="stylesheet"> 
</head>
<body>
	<div class="container imc">
		<h1>IMC</h1>
			<section>
					<form action="imc.php" method="post" id="form">
					<label for="hombre">
					<input type="radio" name="sexo" id="hombre" value="hombre" required>Hombre
					</label>
					<label for="mujer">
					<input type="radio" name="sexo" id="mujer" value="mujer" required>Mujer
					</label> <br> <br>
					<input type="text" name="edad" id="edad" placeholder="Edad" required> <br> <br>
					<input type="text" name="altura" id="altura" placeholder="Altura (cm)" required> <br> <br>
					<input type="text" name="peso" id="peso" placeholder="Peso (kg)" required> <br> <br>
					<input type="submit" class="btn btn-primary btn-lg btn-block" name="calcular" id="calcular" value="CALCULAR"> <br> <br>
				</form>
			</section>
	</div>	
</body>
</html>