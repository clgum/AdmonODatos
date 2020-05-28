<?php

$array=array("vuelos"=>array(
	array("id"=>"1", "origen"=>"New York", "destino"=>"London", "duracion"=>"415"),
	array("id"=>"2", "origen"=>"Shangai", "destino"=>"Paris", "duracion"=>"760"),
	array("id"=>"3", "origen"=>"Istambul", "destino"=>"Tokyo", "duracion"=>"700"),
	array("id"=>"4", "origen"=>"New York", "destino"=>"Paris", "duracion"=>"435"),
	array("id"=>"5", "origen"=>"Moscow", "destino"=>"Paris", "duracion"=>"245"),
	array("id"=>"6", "origen"=>"Lima", "destino"=>"New York", "duracion"=>"455")
)

);
echo json_encode($array);
?>