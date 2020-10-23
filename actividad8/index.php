<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>IAW-UD2-A8</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>

<!-- Se pide realizar un generador para una apuesta del juego de Euromillones que nos permita obtener al azar cinco números
principales (del 1 al 50) y dos números (del 1 al 9) llamados “estrellas”. -->

<h1> Actividad 8 - Euromillón</h1>
<table >
    <tr>
        <th colspan="10">Jugada Euromillones</th>
    </tr>
    <?php

    //Bolas normales
    echo '<tr>';
    $rand0_9 = rand(0,9);
    for ($i = 0; $i < 10; $i++) {
        if ($i == $rand0_9) {
            echo "<td class=\"selected\">$i</td>";
        } else{
            echo "<td>$i</td>";
        }
    }
    echo '</tr>';

    echo '<tr>';
    $rand10_19 = rand(10,19);
    for ($i = 10; $i <= 19; $i++) {
        if ($i == $rand10_19) {
            echo "<td class=\"selected\">$i</td>";
        } else{
            echo "<td>$i</td>";
        }
    }
    echo '</tr>';

    echo '<tr>';
    $rand20_29 = rand(20,29);
    for ($i = 20; $i <= 29; $i++) {
        if ($i == $rand20_29) {
            echo "<td class=\"selected\">$i</td>";
        } else{
            echo "<td>$i</td>";
        }
    }
    echo '</tr>';

    echo '<tr>';
    $rand30_39 = rand(30,39);
    for ($i = 30; $i <= 39; $i++) {
        if ($i == $rand30_39) {
            echo "<td class=\"selected\">$i</td>";
        } else{
            echo "<td>$i</td>";
        }
    }
    echo '</tr>';

    echo '<tr>';
    $rand40_49 = rand(40,49);
    for ($i = 40; $i <= 49; $i++) {
        if ($i == $rand40_49) {
            echo "<td class=\"selected\">$i</td>";
        } else{
            echo "<td>$i</td>";
        }
    }
    echo '</tr>';

    //Estrellas
    echo '<tr class="stars">';
    $rand0_4 = rand(0,4);
    for ($i = 0; $i < 5; $i++) {
        if ($i == $rand0_4) {
            echo "<td class=\"selected\">$i</td>";
        } else{
            echo "<td>$i</td>";
        }
    }
    $rand5_9 = rand(5,9);
    for ($i = 5; $i < 10; $i++) {
        if ($i == $rand5_9) {
            echo "<td class=\"selected\">$i</td>";
        } else{
            echo "<td>$i</td>";
        }
    }
    echo '</tr>';

    ?>
</table>
</body>
</html>