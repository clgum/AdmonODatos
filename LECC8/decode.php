<?php

$contactos = '{"Nombre ":"María","Apellidos":"Mota Velazco","Fecha de nacimiento":"14/10/98","Estado civi":"Soltera","Origen":"Chihuahua, Chih.","Correo Electronico" : "malupita@gmail.com", "Redes Sociales" : "María Mota, lupitamv98"}'; 
$peliculas = '{"Id":"5467","Titulo":"La campaña","Año":"2012","Genero":"Drama","Clasificacion":"B"}';
$vuelos = '{"origen"=>"New York", "destino"=>"London", "duracion"=>"415"}';

$objConF = json_decode($contactos, false);
$objPelF = json_decode($peliculas, false);
$objVueF = json_decode($vuelos, false);

$objConT = json_decode($contactos, true);
$objPelT = json_decode($peliculas, true);
$objVueT = json_decode($vuelos, true);

var_dump($objConF);
echo '<br>';
var_dump($objConT);
$objCon = json_decode($contactos);
echo '<br>';
echo "Objeto estandar:";
echo '<br>';
echo $objCon->Apellidos;
echo '<br>';
echo $objCon->Origen;
echo '<br>';
$arrCon = json_decode($contactos, true);
echo "Arreglo asociativo:";
echo '<br>';
echo $arrCon["Apellidos"];
echo '<br>';
echo $arrCon["Origen"];
echo '<br>';
echo '<br>';


var_dump($objPelF);
echo '<br>';
var_dump($objPelT);
$objPel = json_decode($peliculas);
echo '<br>';
echo "Objeto estandar:";
echo '<br>';
echo $objPel->Año;
echo '<br>';
echo $objPel->Titulo;
echo '<br>';
$arrPel = json_decode($peliculas, true);
echo "Arreglo asociativo:";
echo '<br>';
echo $arrPel["Año"];
echo '<br>';
echo $arrPel["Titulo"];
echo '<br>';


$json = '{"ID":1,"Origen":"New York","Destino":"London","Duración":415 }';
$arr = json_decode($json, true);
echo "Vuelos";
echo '<br>';
echo '<br>';
echo $arr["ID"];
echo '<br>';
echo $arr["Origen"];
echo '<br>';
echo $arr["Destino"];
echo '<br>';
echo $arr["Duración"];
echo '<br>';