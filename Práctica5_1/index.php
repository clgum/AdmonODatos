<?php
$archivo = "employees.xml";

if (file_exists($archivo)){
    $xml = simplexml_load_file($archivo)
    or die("Error: No se puede crear el objeto SimpleXMLElement");
    echo "<h2>Lista de Empleados</h2>";

    $list = $xml->registro;
    $numEmployees = count($list);

    for ($i = 0; $i < $numEmployees; $i++){
        echo "<b>Número de manager:</b> " . $list[$i]->attributes()->manager . "<br>";

        echo "Nombre: " . $list[$i]->nombre . "<br>";

        echo "Puesto: " . $list[$i]->puesto . "<br><br>";
    }
}
?>