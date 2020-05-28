<?php

$array=array("contactos"=>array(
    array("id" : "1", "Nombre" : "Maria", "Apellidos" : "Mota Velazo", "Fecha De Nacimiento" : "14/10/1998", "Estado Civil" : "Soltera", "Origen" : "Chihuahua, Chih.", "Correo Electronico" : "malupita@gmail.com", "Redes Sociales" : "María Mota, lupitamv98"),
    array("id" : "2", "Nombre" : "Andrea", "Apellidos" : "Morales Salcedo", "Fecha De Nacimiento" : "29/11/1999", "Estado Civil" : "Soltera", "Origen" : "Torreon", "Correo Electronico" : "gleekwalker@hotmail.com", "Redes Sociales" : "Adrea Morales, andrea_msg"),
    array("id" : "3", "Nombre" : "Nicole", "Apellidos" : "Adame Perez", "Fecha De Nacimiento" : "12/08/1998", "Estado Civil" : "Casada", "Origen" : "Sinaloa", "Correo Electronico" : "nikadap@gmail.com", "Redes Sociales" : "Nicole Adaper, niki.adaper"),
    array("id" : "4", "Nombre" : "Trinidad", "Apellidos" : "Flores Rodriguez", "Fecha De Nacimiento" : "11/06/1933", "Estado Civil" : "Viuda", "Origen" : "Escalon, Chih.", "Correo Electronico" : "trini_33@live.com.mx", "Redes Sociales" : "Trini Flores")
)

);
echo json_encode($array);
?>