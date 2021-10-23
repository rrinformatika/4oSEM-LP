<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio5</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="exercicio5.php" method="get">
    Tabuada do: <input type="text" name="numero">
    <input type="submit">
    </form>
<?php
    $cont=1;
    $res='';
    $numero = $_GET['numero'];
    while ($cont <= 10){
        $res=$numero*$cont;
        echo "$numero vezes $cont = $res<br>";
        $cont +=1;
    }

?>    
</body>
</html>