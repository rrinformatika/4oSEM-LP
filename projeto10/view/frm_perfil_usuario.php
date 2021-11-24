<?php
session_start();
            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];

if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: frm_logar.html");
                
		exit;
		}else{ 
            // FECHAR COM '}' ESSA LINHA DEPOIS FINAL DO HTML
		
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos e Videogames</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<fieldset>
    <legend>Cadastro de Jogos</legend>
    <a href="frm_acervo.php">Acessar o banco de dados</a><br><br>
    <a href="frm_cadPlataforma">Cadastro de Plataformas</a>
</fieldset>
<?php
    include '../model/footer.php';
?>
</body>
</html>
<?php }?>