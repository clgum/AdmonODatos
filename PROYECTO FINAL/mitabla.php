<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/misestilos2.css" />
    <title>Tabla_ProyFinal CarolinaG</title>
    
</head>

<body>
    <div class="container">
        <h2 class="titulo">Estudio de televisores/pantallas por casa</h2>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Casas con 0 tv</th>
                        <th>Casas con 1 tv</th>
                        <th>Casas con 2 tv</th>
                        <th>Casas con 3 tv</th>
                        <th>Casas con 4 tv</th>
                        <th>Casas con 5 tv</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $mylist = array(
                        array("981", "1019", "10976", "11024", "502", "498"),
                        
                    );
                    $tam = count($mylist);
                    for ($r = 0; $r < $tam; $r++) {
                        echo "<tr>";
                        echo "<td>" . $mylist[$r][0] . "</td>";
                        echo "<td>" . $mylist[$r][1] . "</td>";
                        echo "<td>" . $mylist[$r][2] . "</td>";
                        echo "<td>" . $mylist[$r][3] . "</td>";
                        echo "<td>" . $mylist[$r][4] . "</td>";
                        echo "<td>" . $mylist[$r][5] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tfoot>
            </table>
            <caption>El estudio se hizo en base a 25,000 registros...</caption>
        </div>
    </div>
</body>

</html>