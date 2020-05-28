<?php

$array=array("peliculas"=>array(
	array("id"=>"5467", "titulo"=>"La Campaña", "año"=>"2012", "genero"=>"Drama", "clasificacion"=>"B"),
	array("id"=>"7986", "titulo"=>"Mi villano favorito", "año"=>"2010", "genero"=>"Infantil", "clasificacion"=>"A"),
	array("id"=>"3524", "titulo"=>"The conjuring", "año"=>"2013", "genero"=>"Terror", "clasificacion"=>"B15")
)

);
echo json_encode($array);
?>