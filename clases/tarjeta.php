<?php

declare(strict_types = 1);

class Tarjeta{

    private string $nombre;
    private string $color;
    private int $precioBaseAlquiler;
    private array $precioAlquilerCasas = [];
    

    public function __construct(string $nombre, string $color, int $precioBaseAlquiler, array $precioAlquilerCasas){

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

    public function __toString() : string {
        return "NOMBRE: ".$this->nombre. " COLOR: ".$this->color. " PRECIO BASE ALQUILER: ". $this->precioBaseAlquiler ."€ ". "PRECIO ALQUILER POR COSA O HOTEL: ". implode("€, ",$this->precioAlquilerCasas). "€.";
    }
}

?>