<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>IAW-UD2-A4</title>
    <link rel="stylesheet" type="text/css" href="../conociendo-el-lenguaje-III/assets/css/style.css">
</head>
<body>
<h1> Actividad 4 - Saludos por horas</h1>
<?php
/**
 *  Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas tardes o buenas noches según la hora.
 *  Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5. respectivamente.
 */

$hora = date("H");

$saludo = "";
echo $hora;
if ($hora < 6 || $hora >= 21) {

    $saludo = "Buenas noches";

}elseif ($hora <= 12 ) {

    $saludo = "Buenas dias";

}else {

    $saludo = "Buenas tardes";

}

echo $saludo;

?>
</body>
</html>
