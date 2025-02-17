<?php

declare(strict_types = 1);

class Tarjeta{

    private $nombre;
    private $color;
    private $precioBaseAlquiler;
    private $precioAlquilerCasas = [];
    

    public function __construct($nombre, $color, $precioBaseAlquiler, $precioAlquilerCasas){

        $this->nombre = $nombre;
        $this->color = $color;
        $this->precioBaseAlquiler = $precioBaseAlquiler;
        $this->precioAlquilerCasas = $precioAlquilerCasas;

    } 

    public function getColor(): string {
        return $this->color;
    }

    public function getPrecioBaseAlquiler(): int {
        return $this->precioBaseAlquiler;
    }
}

?>