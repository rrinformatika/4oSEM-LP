<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form action="exercicio2.php" method="get">
    tempo: <input type="text" name='tempo'><br>
    velMedia: <input type="text" name='velMedia'><br>
    <input type="submit">
</form>
<?php
    $distancia='';
    $consumoLitros='';
    $media=12;
    $tempo = $_GET['tempo'];
    $velMedia = $_GET['velMedia'];
    $distancia = ($velMedia*$tempo);
    $consumoLitros = $distancia/$media;
    echo " Velocidade Média: $velMedia<br>Duração da Viagem: $tempo<br> Distancia: $distancia<br>
    Litros: $consumoLitros";

?>
</body>
</html>