<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>IAW-UD2-A3</title>
    <link rel="stylesheet" type="text/css" href="../conociendo-el-lenguaje-III/assets/css/style.css">
</head>
<body>
<h1> Actividad 3 - Días semana texto</h1>

<!-- Escribe un programa en que dado un número aleatorio del 1 a 7 escriba el correspondiente nombre del día de la semana.
Utiiza la setencia switch -->
<?php

 $dia = rand(1, 7);
 $diaTexto = "";

 switch ($dia){
     case 1:
         $diaTexto = "Lunes";
         break;
     case 2:
         $diaTexto = "Martes";
         break;
     case 3:
         $diaTexto = "Miércoles";
         break;
     case 4:
         $diaTexto = "Jueves";
         break;
     case 5:
         $diaTexto = "Viernes";
         break;
     case 6:
         $diaTexto = "Sábado";
         break;
     case 7:
         $diaTexto = "Domingo";
         break;
 }

 echo $diaTexto;

?>
</body>
</html>
