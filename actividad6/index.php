<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>IAW-UD2-A6</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
<h1> Actividad 6 - Piràmide @</h1>

<pre>
<?php
/**
 *  Hacer una página en PHP que muestre una figura similar a la siguiente.
 *  NOTA: solo está permitido el uso de un '@' en todo el código. Deberás utilizar 2 bucles `for`
 */

for ($i = 1; $i <= 5; $i++) {

    for ($j = 0; $j < $i; $j++) {
        echo "@";
    }

    echo "\n";
}

?>
</pre>
</body>
</html>
