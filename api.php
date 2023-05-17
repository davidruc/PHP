<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="main.js" defer></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>Algoritmo promedios</h1>
    <form  method="get">
        <input type="text" name="nota1">
        <input type="text" name="nota2">
        <input type="text" name="nota3">
        <input type="submit" value="respuesta">

    </form>
</body>
</html>

<?php

if(isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3']) && is_numeric($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3']))
{
    $suma = $_GET['nota1'] + $_GET['nota2'] + $_GET['nota3'];
    $promedio = $suma/3;
    if($promedio <= 5 && $promedio > 3.9){
        echo "Tu promedio fue excelente! :($promedio)";
    } else if($promedio >= 0 && $promedio <= 3.9){
        echo "Tu promedio fue muy malo >:c ($promedio)";
    } else{
        echo "como vas a sacar $promedio puta";
    } 
} else {
    echo "subnormal";
}

?>


