<?php
$nombreArchivo = "biblioteca.xml";
if (file_exists($nombreArchivo)){
$miXML = simplexml_load_file($nombreArchivo)
or die("Error: No se puede crear el objeto SimpleXMLElement");
//var_dump($miXML);
}
//echo ($miXML->libro[0]->attributes()->isbn);
//echo("<br>");
//echo ($miXML->libro[0]->attributes()[0]);
//echo("<br>");
//echo ($miXML->libro[0]->attributes()['isbn']);
//echo("<br>");
echo ("El autor del primer libro es: ". $miXML->libro[0]->autor);
echo("<br>");
echo ("El autor del segundo libro es: ". $miXML->libro[1]->autor);
echo("<br>");
echo ("El autor del tercer libro es: ". $miXML->libro[2]->autor);
echo("<br>");
echo("<br>");
$nombreLibro1 = $miXML->libro[0]->titulo;
$precioLibro1 = $miXML->libro[0]->precio;
$modedaLibro1 = $miXML->libro[0]->precio->attributes()['moneda'];
$nombreLibro2 = $miXML->libro[1]->titulo;
$precioLibro2 = $miXML->libro[1]->precio;
$modedaLibro2 = $miXML->libro[1]->precio->attributes()['moneda'];
$nombreLibro3 = $miXML->libro[2]->titulo;
$precioLibro3 = $miXML->libro[2]->precio;
$modedaLibro3 = $miXML->libro[2]->precio->attributes()['moneda'];
echo "<br>";
echo ("El primer libro: \"<b> " .  $nombreLibro1 . "</b>\" tiene un valor de: <b>" . $precioLibro1 . "</b> en: <b>" . $modedaLibro1) . "</b><br>";
echo ("El segundo libro: \"<b> "  .  $nombreLibro2 . "</b>\" tiene un valor de: <b>" . $precioLibro2 . "</b> en: <b>" . $modedaLibro2) . "</b><br>";
echo ("El tercer libro: \"<b> "  .  $nombreLibro3 . "</b>\" tiene un valor de: <b>" . $precioLibro3 . "</b> en: <b>" . $modedaLibro3) . "</b><br>";
?>