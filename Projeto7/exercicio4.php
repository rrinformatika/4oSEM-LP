<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio4</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="exercicio4.php" method="get">
    Salario: <input type="text" name="salario"><br>
    <input type="submit">
</form>
<?php
    $salario = $_GET['salario'];
    $novoSalario='';
    if ($salario <=300){
        $novoSalario = $salario*=1.50;
    }else{
        $novoSalario = $salario*=1.30;
    }
    echo "Salario: $salario <br> Novo Salario: $novoSalario"


?>
    
</body>
</html>