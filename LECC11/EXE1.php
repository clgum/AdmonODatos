<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="./css/bootstrap.min.css" />
	<link rel="stylesheet" href="./css/estilos.css" />
	<title>Tabla Pronóstico del Tiempo</title>
</head>
<body>
	<div class="container">
		<h1 class="titulo">Pronóstico del Tiempo</h1>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead class="thead-dark">

					<tr>
						<th>Día</th>
						<th>Hoy</th>
						<th>Mañana</th>
						<th>Miércoles</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$lista = array(
						array("<strong>Condición</strong>", "Soleado", "Mayormente soleado", "Parcialmente nublado"),
						array("<strong>Temperatura</strong>", "19 °C", "17 °C", "12 °C"),
						array("<strong>Vientos</strong", "E 13 km/h", "E 11 km/h", "S 16 km/h")
					);

					$tam = count($lista);

					for ($r = 0; $r < $tam; $r++) {
						echo "<tr>";
						echo "<td>" . $lista[$r][0] . "</td>";
						echo "<td>" . $lista[$r][1] . "</td>";
						echo "<td>" . $lista[$r][2] . "</td>";
						echo "<td>" . $lista[$r][3] . "</td>";
						echo "</tr>";
					}

					?>
				</tfoot>
				<caption>Clima de la ciudad en los próximos días.</caption>
			</table>
		</div>
	</div>
</body>
</html>