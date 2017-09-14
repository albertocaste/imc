<?php 
	if (isset($_POST["calcular"])) {
		$altura = $_POST["altura"];
		$peso = $_POST["peso"];
		$edad = $_POST["edad"];
		$sexo = $_POST["sexo"];

		function imc($altura,$peso){
			$altura = $altura / 100;
			$result = $peso / ($altura * $altura);
			return $result;
		}

		$imc = round((imc($altura,$peso)), 2);
		$fecha = date("H:i:s d/m/Y");

		$link = mysqli_connect('localhost', 'root') or die('No se pudo conectar: ' . mysql_error());
		mysqli_select_db($link, "imc") or die('No se puede conectar a la base de datos: ' . mysql_error());
		mysqli_set_charset($link, "utf8");

		$queryimc = "SELECT * FROM datos";
		$resultimc = mysqli_query($link, $queryimc);

		while ($rowimc = mysqli_fetch_array($resultimc)) {
			if ($imc > $rowimc["MIN"] && $imc <= $rowimc["MAX"]) {
				$imcresultado = $rowimc["RESULTADO"];
				}
		}
				
		$queryusuario = "INSERT INTO usuarios (FECHA, SEXO, EDAD, ALTURA, IMC, RESULTADO) VALUES ('$fecha', '$sexo', '$edad', '$altura', '$imc', '$imcresultado')";
		$resultusuario = mysqli_query($link, $queryusuario);
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultado</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Anton|Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container imc">
		<h1 >Tu IMC</h1>
		<section>
			<p id="numimc"><?=$imc?></p>
			<p><?=$imcresultado?></p> <br> <br>			
			<a href="resultados.php">Todos los resultados</a>
			<a href="index.php">index</a>
		</section>
		
	</div>
	
	
</body>
</html>

<?php 
	} else{
		header("Location: index.php");
	}
?>