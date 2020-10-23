<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>IAW-UD2-A1</title>
</head>
<body>
<h1>Actividad 1 - Conversor nota numérica a decimal</h1>
<?php

/**
 * Hacer una página en PHP que para una nota almacenada en una variable, muestre por pantalla lo siguiente:
 * a) Si la nota es menor que 5 -> “suspenso”
 * b) Si la nota es 5 -> “aprobado”
 * c) Si la nota está entre 6 y 7 -> “bien”
 * d) Si la nota está entre 8 y 9 -> “notable”
 * e) Si la nota es 10 -> “sobresaliente”
 * Nota: Las notas < que 5 deben aparecer coloreadas en rojo y las mayores que 5 en verde.
 * Utiliza la sentencia for
 */

$nota = 4;
$notaTexto = "";
$color = "";

if ($nota >= 0 && $nota <= 10) {

    if ($nota < 5) {

        $color = "#FF0000";
        $notaTexto = "Suspenso";

    } elseif ($nota < 6) {

        $color = "#7CFC00";
        $notaTexto = "Aprobado";

    } elseif ($nota < 8) {

        $color = "#7CFC00";
        $notaTexto = "Bien";

    } elseif ($nota < 10) {

        $color = "#7CFC00";
        $notaTexto = "Notable";

    } else {

        $color = "#7CFC00";
        $notaTexto = "Sobresaliente";

    }

}

echo "<p style='color: $color'>$notaTexto</p>"

?>
</body>
</html>