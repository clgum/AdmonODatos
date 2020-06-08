<!DOCTYPE html>
<html lang ="es"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gráfica_ProyFinal CarolinaG</title>
	<link rel="stylesheet" href="./css/chartist.min.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/misestilos.css">
	<script src="./js/chartist.min.js"></script>

</head>

<body>
	<div clas="container">
		<div class="centro">
			<div class="dev">
				<h1>Estudio de televisores/pantallas por casa</h1> 
				<span class="subt">25 000 Capturas.</span>
		</div>

		<div class="ct-chart ct-octave"></div>

		<?php
		//CONTADOR DE DATOS
		$array = explode("\n", file_get_contents('datosCrudos.txt'));
        
        $stri = ", " . implode(", ",$array) . ",";
        $cont0 = substr_count($stri, '0');
        $stri = ", " . implode(", ",$array) . ",";
        $cont1 = substr_count($stri, '1');
        $stri = ", " . implode(", ",$array) . ",";
        $cont2 = substr_count($stri, '2');
        $stri = ", " . implode(", ",$array) . ",";
        $cont3 = substr_count($stri, '3');
        $stri = ", " . implode(", ",$array) . ",";
        $cont4 = substr_count($stri, '4');
        $stri = ", " . implode(", ",$array) . ",";
        $cont5 = substr_count($stri, '5');
        $datos=array("Casas con 0 TV:"=> $cont0, "Casas con 1 tv"=> $cont1, "Casas con 2 tv"=> $cont2, "Casas con 3 tv"=> $cont3, "Casas con 4 tv"=> $cont4, "Casas con 5 tv"=> $cont5);

        $json_string = json_encode($datos);
        $file = './JSON/datos.json';
        file_put_contents($file, $json_string);

		//ABRIR JSON
		      $archivo = './JSON/datos.json';
		      
		      $handle = fopen($archivo, 'r')
		          or die("Error: No se puede abrir el archivo json");

		      $size = filesize($archivo);

		      $contenido = fread($handle, $size);

		      fclose($handle);

		//DECODIFICAR ARCHIVO
		      $lista = json_decode($contenido, true);
			
		//ASIGNAR ETIQUETAS Y VALORES
		      $lista_labels = array();
		      $lista_valores = array();

		      foreach ($lista as $casas => $pantallas) { 
		      	$lista_labels[] = $casas;
		      	$lista_valores[] = $pantallas;
			  } 
			  
		//SCRIPT JC
		      ?>
			
		      <script>
		      	  var datos = {

		      	  	  labels: [ 
		      	  	      '<?php echo $lista_labels[0]; ?>',
		      	  	      '<?php echo $lista_labels[1]; ?>',
		      	  	      '<?php echo $lista_labels[2]; ?>',
		      	  	      '<?php echo $lista_labels[3]; ?>',
		      	  	      '<?php echo $lista_labels[4]; ?>',
		      	  	      '<?php echo $lista_labels[5]; ?>'
		      	  	    ],

		      	  	    series: [{
		      	  	    	name: 'serie-1',
		      	  	    	data: [
		      	  	    	    <?php echo $lista_valores[0]; ?>,
		      	  	    	    <?php echo $lista_valores[1]; ?>,
		      	  	    	    <?php echo $lista_valores[2]; ?>,
		      	  	    	    <?php echo $lista_valores[3]; ?>,
		      	  	    	    <?php echo $lista_valores[4]; ?>,
		      	  	    	    <?php echo $lista_valores[5]; ?>,
		      	  	    	]
		      	  	    }]
		      	  	};
						
		//CONFIGURAR MI GRÁFICA
		      	  	var opciones = {
                		fullWidth: true,
                		seriesBarDistance: 15,
                		chartPadding: {
                    		bottom: 40
                		},

                axisX: {
                    position: 'end'
                },

                axisY: {
                    type: Chartist.FixedScaleAxis,
                    ticks: [0, 2500, 5000, 7500, 10000, 12500],
                    high: 12500,
                }
            };

            var opcionesResponsive = [
                ['screen and (min-width: 641px) and (max-width: 1024px)', {
                    axisX: {
                        labelInterpolationFnc: function(value) {
                            return value;
                        }
                    }
                }],
                ['screen and (max-width: 640px)', {
                    seriesBarDistance: 5,
                    axisX: {
                        labelInterpolationFnc: function(value) {
                            return value[0];
                        }
                    }
                }]
            ];

            new Chartist.Bar('.ct-chart', datos, opciones, opcionesResponsive);
        </script>
</div>
</body>
</html>