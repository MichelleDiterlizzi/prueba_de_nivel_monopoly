<?php

require_once("tarjeta.php");

class GestionTarjetas{

    private $tarjetas = [];


    public function __construct($tarjetas) {
        $this->tarjetas = $tarjetas;
    }

    public function devolverCartasColor($color): void{

        echo "Las tajetas de color ". $color. " son: ".PHP_EOL;

        foreach($this->tarjetas as $tarjeta){

            if($tarjeta->getColor() == $color){
                print_r($tarjeta);
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
        print_r($tarjetaAlquilerMasAlto).PHP_EOL;
    } 
}

?>