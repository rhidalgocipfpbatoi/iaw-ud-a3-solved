<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>IAW-UD2-A2</title>
</head>
<body>
<h1> Actividad 2 - Llamada telefónica</h1>
<?php

/**
 * Realizar un script que determine la cantidad total a pagar por una llamada telefónica de acuerdo a las siguientes premisas:
 * 1. Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
 * 2. Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.
 * La duración en segundos de la llamada estará almacenada en una variable.
 */

$totalSegundos = rand(10, 10000);

$totalMinutos = (int) $totalSegundos / 60;

if ($totalMinutos < 3 ) {

    $precio = 10;

} else {

    $precio = 10;
    $totalMinutosAdicionales =  $totalMinutos - 3;
    $precioAdicional = $totalMinutosAdicionales * 5;
    $precio = $precio + $precioAdicional;

}

    echo "<ul> La llamada ha costado $precio";

?>
</body>
</html>