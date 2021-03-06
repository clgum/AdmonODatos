<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Mostrando contactos json</title>
</head>

<body>

    <?php
    $archivo = 'agenda.json';
    if (file_exists("$archivo")) {

        $x = fopen($archivo, 'r')
            or die("Error: No se puede abrir el archivo json");

        $size = filesize($archivo);
        $contenido = fread($x, $size);

        fclose($x);

       $listaContactos = json_decode($contenido, true);

        $numContactos = count($listaContactos);

    ?> 

        <div class="container">
            <h1 class="titulo">Lista de Contactos</h1>
            <div class="table-responsive">
                <table class="table">
                    <!-- Encabezado de tabla-->
                    <thead class="thead-dark">
                        <tr>
                            <!-- diseño del renglon de encabezado-->
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>F Nacimiento</th>
                            <th>Estado Civil</th>
                            <th>Origen</th>
                            <th>Correo</th>
                            <th>Redes</th>
                        </tr>
                    </thead>
                    <!-- cuerpo de la tabla -->
                    <tbody>
                        <!-- Script que continúa para ir mostrando los contactos en la página-->
                        <?php
                        for ($i = 0; $i < $numContactos; $i++) {
                            echo '<tr>';
                            echo '<td>' . $listaContactos[$i]['nombre'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['apellidos'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['fecha_nac'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['estado_civil'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['origen'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['correo'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['redes'] . '</td>';
                            echo '</tr>';
                        } 
                        ?> <!-- fin del script -->
                    </tbody>
                </table>
            </div>

        </div>
    <?php
    } 
    ?>
    
</body>

</html>