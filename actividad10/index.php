<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>IAW-UD2-A10</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
<h1> Actividad 10 - Codificación ASCII</h1>
<?php

/**
 *  Crea una páginas php que muestra todo el código ASCII en una tabla de 16 columnas
 */

echo "<table class='color-table-odd'>";
echo "<tr>";
for ($i = 0; $i < 8; $i++) {
    echo  "<th>CÓDIGO</th><th>VALOR</th>";
}
echo "</tr>";

for ($i = 0; $i < 16; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 8; $j++) {
        $number =  ($i * 8) + $j;
        if($number == 128 ){
            continue;
        }
        echo "<td>$number</td>";
        $chrASCII = chr($number);
        echo "<td>$chrASCII</td>";
    }
    echo "</tr>";
}
echo "</table>";

//YOUR CODE HERE

?>
</body>
</html>