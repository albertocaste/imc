<?php 
	$link = mysqli_connect('localhost', 'root') or die('No se pudo conectar: ' . mysql_error());
	mysqli_select_db($link, "imc") or die('No se puede conectar a la base de datos: ' . mysql_error());
	mysqli_set_charset($link, "utf8");

	$querylist = "SELECT * FROM usuarios ORDER BY ID DESC";
	$resultlist = mysqli_query($link, $querylist) or die('Consulta fallida: ' . mysql_error());

	$querydatos = "SELECT * FROM usuarios";
	$resultdatos = mysqli_query($link, $querydatos) or die('Consulta fallida: ' . mysql_error());

	$querysexohombre = "SELECT SEXO FROM usuarios WHERE SEXO = 'hombre'";
	$resultsexohombre = mysqli_query($link, $querysexohombre) or die('Consulta fallida: ' . mysql_error());
	$countsexohombre = mysqli_num_rows($resultsexohombre);

	$querysexomujer = "SELECT SEXO FROM usuarios WHERE SEXO = 'mujer'";
	$resultsexomujer = mysqli_query($link, $querysexomujer) or die('Consulta fallida: ' . mysql_error());
	$countsexomujer = mysqli_num_rows($resultsexomujer);

	$queryinfra = "SELECT RESULTADO FROM usuarios WHERE RESULTADO = 'Infrapeso' ";
	$resultinfra = mysqli_query($link, $queryinfra) or die('Consulta fallida: ' . mysql_error());
	$countinfra = mysqli_num_rows($resultinfra);


	$queryimc = "SELECT * FROM datos";
	$resultimc = mysqli_query($link, $queryimc) or die('Consulta fallida: ' . mysql_error());

	$infratotal = 0;
	$inframujer = 0;
	$infrahombre = 0;
	$normaltotal = 0;
	$normalmujer = 0;
	$normalhombre = 0;
	$total = 0;
	$obeslevetotal = 0;
	$obesmediatotal = 0;
	$obesmorbtotal = 0;
	$sobretotal = 0;
	 while ($rowdatos = mysqli_fetch_array($resultdatos)) {
	 	if ($rowdatos["RESULTADO"] == "Infrapeso") {$infratotal ++;}
	 	if ($rowdatos["RESULTADO"] == "Infrapeso" && $rowdatos["SEXO"] == "mujer") {$inframujer ++;}
	 	if ($rowdatos["RESULTADO"] == "Infrapeso" && $rowdatos["SEXO"] == "hombre") {$infrahombre ++;}
	 	if ($rowdatos["RESULTADO"] == "Peso Normal") {$normaltotal ++;	}
	 	if ($rowdatos["RESULTADO"] == "Peso Normal" && $rowdatos["SEXO"] == "mujer") {$normalmujer ++;}
	 	if ($rowdatos["RESULTADO"] == "Peso Normal" && $rowdatos["SEXO"] == "hombre") {$normalhombre ++;}
	 	if ($rowdatos["RESULTADO"]) {$total ++;}
	 	if ($rowdatos["RESULTADO"] == "Sobrepeso" ) {$sobretotal ++;}
	 	if ($rowdatos["RESULTADO"] == "Obesidad Leve" ) {$obeslevetotal ++;}
	 	if ($rowdatos["RESULTADO"] == "Obesidad Media" ) {$obesmediatotal ++;}
	 	if ($rowdatos["RESULTADO"] == "Obesidad Mórbida" ) {$obesmorbtotal ++;}
	}

	$porinfratotal = round((($infratotal / $total) * 100), 2);
	$porinframujer = round((($inframujer / $infratotal) * 100), 2);
	$porinfrahombre = round((($infrahombre / $infratotal) * 100), 2);

	$pornormaltotal = round((($normaltotal / $total) * 100), 2);
	$pornormalmujer = round((($normalmujer / $normaltotal) * 100), 2);
	$pornormalhombre = round((($normalhombre / $normaltotal) * 100), 2);

	$porsobretotal = round((($sobretotal / $total) * 100), 2);
	$porobeslevetotal = round((($obeslevetotal / $total) * 100), 2);
	$porobesmediatotal = round((($obesmediatotal / $total) * 100), 2);
	$porobesmorbtotal = round((($obesmorbtotal / $total) * 100), 2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultados</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Anton|Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!--<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Sexo visitantes'],
          ['Hombres', <?=$countsexohombre?>],
          ['Mujeres', <?=$countsexomujer?>]
        ]);

        var options = {
          title: 'Sexo visitantes'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);

      }
    </script>
-->

</head>
<body>
	<div class="container imc2">
		<h1>RESULTADOS</h1>

		<div>
			<div  style="background: rgba(0,0,0,0.1); height: 40px; color: white; font-size: 25px; ">
				<?=$total?> personas registradas
			</div> <br>
			<div class="registro" style="background: #fcb762; width:<?=$porinfratotal?>%;">
				Infrapeso<br><span><?=$porinfratotal?> %</span>
			</div>
			<div class="registro" style="background: #fcac2a; width:<?=$pornormaltotal?>%;">
				Peso Normal <br> <span><?=$pornormaltotal?> %</span>
			</div>
			<div class="registro" style="background: #fc7e2f; width:<?=$porsobretotal?>%;">
				Sobrepeso <br> <span><?=$porsobretotal?> %</span>
			</div>
			<div class="registro" style="background: #f96520; width:<?=$porobeslevetotal?>%;">
				Obesidad Leve <br> <span><?=$porobeslevetotal?> %</span>
			</div>
			<div class="registro" style="background: #ff4823; width:<?=$porobesmediatotal?>%;">
				Obesidad Media <br> <span><?=$porobesmediatotal?> %</span>
			</div>
			<div class="registro" style="background: #d82400; width:<?=$porobesmorbtotal?>%;">
				Obesidad Mórbida <br> <span><?=$porobesmorbtotal?> %</span>
			</div>
		</div> 
		<br> <br> <br>
		<section>
			<div style="color: white; ">
				<?=$infratotal?> personas con Infrapeso  
			</div>
			<div style="background: pink; height: 40px; width:<?=$porinframujer?>%; color: white; float: right;">
				Mujeres con Infrapeso <?=$porinframujer?> %
			</div>
			<div style="background: blue; height: 40px; width:<?=$porinfrahombre?>%; color: white; float: right;">
				Hombres con Infrapeso <?=$porinfrahombre?> %
			</div>
		</section>
		<br> <br> <br>
		<section>
			<div style="color: white; ">
				<?=$normaltotal?> personas con Peso Normal 
			</div>
			<div style="background: pink; height: 40px; width:<?=$pornormalmujer?>%; color: white; float: right;">
				Mujeres con Peso Normal <?=$pornormalmujer?> %
			</div>
			<div style="background: blue; height: 40px; width:<?=$pornormalhombre?>%; color: white; float: right;">
				Hombres con Peso Normal <?=$pornormalhombre?> %
			</div>
		</section>
		<br> <br>
		<section>
			<div>
				<h2>Listado de usuarios</h2>
				<table class='table table-bordered'>
					<tr>
						<th>ID</th>
						<th>FECHA DE INSCRIPCIÓN</th>
						<th>SEXO</th>
						<th>IMC</th>
						<th>RESULTADO</th>
					</tr>
						<?php 
							while ($rowlist = mysqli_fetch_array($resultlist)) {
						?>
							<tr>
								<td><?=$rowlist["ID"]?></td>
								<td><?=$rowlist["FECHA"]?></td>
								<td><?=$rowlist["SEXO"]?></td>
								<td><?=$rowlist["IMC"]?></td>
								<td><?=$rowlist["RESULTADO"]?></td>
							</tr>
							
						<?php
						}
						?>
					</table>

			</div>
		</section>
	</div>
	
</body>
</html>