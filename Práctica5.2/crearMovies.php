<?php
$dom = new DOMDocument();
    $dom->encoding ="utf-8";
    $dom->xmlVersion = '1.0';
    $dom->formatOutput = true;

$xml_file_name = "movie_list.xml";
    $raiz = $dom->createElement("Peliculas");
        $nodo_peli = $dom->createElement("pelicula");
        $attr_peli_id = new DOMAttr("peli_id", "5467");
        $nodo_peli->setAttributeNode($attr_peli_id);

        $child_node_title = $dom->createElement("Titulo", "La Campaña");
        $nodo_peli->appendChild($child_node_title);

        $nodo_son_año = $dom->createElement("Año", 2012);
        $nodo_peli->appendChild($nodo_son_año);

        $nodo_son_genero = $dom->createElement("Genero", "Drama");
        $nodo_peli->appendChild($nodo_son_genero);

        $child_node_ratings = $dom->createElement("Clasificación", "B");
        $nodo_peli->appendChild($child_node_ratings);

        //SecondMovie
        $nodo_peli = $dom->createElement("pelicula");
        $attr_peli_id = new DOMAttr("peli_id", "7986");
        $nodo_peli->setAttributeNode($attr_peli_id);

        $child_node_title = $dom->createElement("Titulo", "Mi villano favorito");
        $nodo_peli->appendChild($child_node_title);

        $nodo_son_año = $dom->createElement("Año", 2010);
        $nodo_peli->appendChild($nodo_son_año);

        $nodo_son_genero = $dom->createElement("Genero", "Familiar-Infantil");
        $nodo_peli->appendChild($nodo_son_genero);

        $child_node_ratings = $dom->createElement("Clasificación", "A");
        $nodo_peli->appendChild($child_node_ratings);

        //ThirdMovie
        $nodo_peli = $dom->createElement("pelicula");
        $attr_peli_id = new DOMAttr("peli_id", "3524");
        $nodo_peli->setAttributeNode($attr_peli_id);

        $child_node_title = $dom->createElement("Titulo", "The Conjuring");
        $nodo_peli->appendChild($child_node_title);

        $nodo_son_año = $dom->createElement("Año", 2013);
        $nodo_peli->appendChild($nodo_son_año);

        $nodo_son_genero = $dom->createElement("Genero", "Terror-Suspenso");
        $nodo_peli->appendChild($nodo_son_genero);

        $child_node_ratings = $dom->createElement("Clasificación", "B15");
        $nodo_peli->appendChild($child_node_ratings);

    $raiz->appendChild($nodo_peli);

    $dom->appendChild($raiz);

    $dom->save($xml_file_name);

    echo "El archivo: <a href= '$xml_file_name'> $xml_file_name </a> se ha creado con éxito";