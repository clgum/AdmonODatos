<?php

class Peliculas
{
	public $nombre;
	public $genero;
	public $duracion;
	public $clasificacion;
	public $protagonista;

	public function __construct(string $nombre, string $genero, string $duracion, string $clasificacion, string $protagonista)
	{
		$this->nombre = $nombre;
		$this->genero = $genero;
		$this->duracion = $duracion;
		$this->clasificacion = $clasificacion;
		$this->protagonista = $protagonista;
	}
}