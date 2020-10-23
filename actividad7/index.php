<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>IAW-UD2-A7</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
    <h1>Actividad 7 - Tirar un dado</h1>
    <h2>3 dados</h2>
    <p>
        <?php
            $num = rand(1,6);
            echo "<img src=\"../assets/images/dados/$num.svg\" alt=\"5\" title=\"5\" width=\"140\" height=\"140\">";
        ?>

    </p>
</body>
</html>