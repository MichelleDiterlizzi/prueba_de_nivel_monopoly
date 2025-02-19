<?php

declare(strict_types = 1);

require_once("tarjeta.php");

class GestionTarjetas{

    private array $tarjetas = [];


    public function __construct(array $tarjetas) {
        $this->tarjetas = $tarjetas;
    }

    public function devolverCartasColor($color): void{

        echo "Las tajetas de color ". $color. " son: ".PHP_EOL;

        foreach($this->tarjetas as $tarjeta){

            if($tarjeta->getColor() == $color){
                echo $tarjeta.PHP_EOL;
            }
        }
    }

    public function devolverAlquilerBaseMasAlto(): void{

        echo "La tajeta con el alquiler mas alto es: ".PHP_EOL;

        $tarjetaAlquilerMasAlto = $this->tarjetas[0];

        foreach($this->tarjetas as $tarjeta){
            if($tarjeta->getPrecioBaseAlquiler() > $tarjetaAlquilerMasAlto->getPrecioBaseAlquiler()){

                $tarjetaAlquilerMasAlto = $tarjeta;
            }
        }
        echo $tarjeta.PHP_EOL;
    } 
}

?>