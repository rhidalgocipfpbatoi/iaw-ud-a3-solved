<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>IAW-UD2-A2</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
<h1> Actividad 9 - Bolas de colores</h1>
<!-- Escriba un programa que dibuje 30 círculos númerados. Usa la estructura `for`. -->
<div class="bolas">
    <?php
        for ($i=1; $i<=30;$i++) {
            $num = rand(1,15);
            echo '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="70" height="70" font-size="45">
                  <circle cx="35" cy="35" r="30" fill="rgb(2, 255, 255)"/>
                  <text x="35" y="50" text-anchor="middle" transform="rotate(10 35 35)">'.$num.'</text></svg>';
        }
    ?>

</div>
</body>
</html>
