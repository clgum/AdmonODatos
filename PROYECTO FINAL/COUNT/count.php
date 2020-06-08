<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    
    $array = explode("\n", file_get_contents('datosCrudos.txt'));
        
    $stri = ", " . implode(", ",$array) . ",";
    $cont0 = substr_count($stri, '0');
    echo $cont0;
    echo "<br>";
    $stri = ", " . implode(", ",$array) . ",";
    $cont1 = substr_count($stri, '1');
    echo $cont1;
    echo "<br>";
    $stri = ", " . implode(", ",$array) . ",";
    $cont2 = substr_count($stri, '2');
    echo $cont2;
    echo "<br>";
    $stri = ", " . implode(", ",$array) . ",";
    $cont3 = substr_count($stri, '3');
    echo $cont3;
    echo "<br>";
    $stri = ", " . implode(", ",$array) . ",";
    $cont4 = substr_count($stri, '4');
    echo $cont4;
    echo "<br>";
    $stri = ", " . implode(", ",$array) . ",";
    $cont5 = substr_count($stri, '5');
    echo $cont5;
    echo "<br>";
    $datos=array("Casas con 0 tv"=> $cont0, "Casas con 1 tv"=> $cont1, "Casas con 2 tv"=> $cont2, "Casas con 3 tv"=> $cont3, "Casas con 4 tv"=> $cont4, "Casas con 5 tv"=> $cont5);
    var_dump($datos);

    $json_string = json_encode($datos);
    $file = './JSON/datos.json';
    file_put_contents($file, $json_string);

    ?>
    
</body>
</html>