<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
 <body>
 <form action='exercicio1.php' method="get">
  Nota 1: <input type="text" name="nota1"><br>
  Nota 2: <input type="text" name="nota2"><br>
  Nota 3: <input type="text" name="nota3"><br>
  <input type="submit">
 </form>
  <?php
  $num1=0;$num2=0;$num3=0;$situacao=0;
  $num1 = $_GET['nota1'];
  $num2 = $_GET['nota2'];
  $num3 = $_GET['nota3'];
  $media = ($num1 + $num2 + $num3)/3;
  $texto = '';
    if ($media >= 7){
     $texto = "Aprovado";
    }else if ($media <5 ){
    $texto = "Reprovado";
    }else{
    $texto = "Recuperação";
    }
  echo "Média: $media <br> Resultado: $texto";
 ?>
 </body>
</html>