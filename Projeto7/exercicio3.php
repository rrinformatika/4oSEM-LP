<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio3</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="exercicio3.php" method="get">
        Valor: <input type="text" name='valor'>
        <input type="submit">
    </form>
    <?php
        $valor = $_GET['valor'];
        $mensagem='';
        if ($valor == 0){
            $mensagem = 'O Valor digitado é 0';
        }else if ($valor >0){
            $mensagem = "O Valor é positivo";
        }else{
            $mensagem = "O valor é negativo";
        }
        echo $mensagem
    
    
    ?>
    
</body>
</html>  