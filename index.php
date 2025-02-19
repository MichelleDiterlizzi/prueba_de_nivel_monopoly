<?php

declare(strict_types = 1);
require_once("clases/tarjeta.php");
require_once("clases/gestioTarjetas.php");


$tarjeta1 = new Tarjeta("Via Roma", "Verde", 10, [30, 40, 50, 55, 70]);
$tarjeta2 = new Tarjeta("Piazza Giulio Cesare", "Amarillo", 40, [50, 60, 70, 80, 200]);
$tarjeta3 = new Tarjeta("Via Largo Colombo", "Roja", 30, [40, 50, 60, 150]);
$tarjeta4 = new Tarjeta("Viale Vesuvio", "Azul marino", 20, [25, 30, 40, 100]);
$tarjeta5 = new Tarjeta("Via Largo Cornelia", "Roja", 25, [45, 50, 65, 120]);

$partido = new GestionTarjetas([$tarjeta1, $tarjeta2, $tarjeta3, $tarjeta4, $tarjeta5]);


$partido->devolverCartasColor("Amarillo");
$partido->devolverCartasColor("Roja");

$partido->devolverAlquilerBaseMasAlto();

?>