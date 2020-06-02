<?php

require_once('./ClassPeli.php');

$archivo_json = "pelis.json";

$pelicula1 = new Peliculas(
	"Capitán América: El primer Vengador",
	"Acción",
	"124 min",
	"B",
	"Chris Evans"
);

$pelicula2 = new Peliculas(
	"Después de la Tierra",
	"Ciencia Ficción",
	"100 min",
	"B",
	"Will Smith, Jaden Smith"
);

$peliculas = array();

$peliculas[] = $pelicula1;

$peliculas[] = $pelicula2;

$json_string = json_encode($peliculas);

$arch = fopen($archivo_json,'w');
if( $arch == false ) {
	echo ( "Error al abrir el archivo" );
	exit();
}

fwrite($arch,$json_string);

fclose($arch);

echo '<h3>Datos escritos en peliculas.json </h3>';

header("refresh:2;url=mostrar_json.php");