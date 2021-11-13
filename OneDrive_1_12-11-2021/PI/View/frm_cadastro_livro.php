<?php
session_start();
            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];

if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: frm_logar.php");
                
		exit;
		}else{
		
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="css/estilo_index.css">   
    <title>Cadastro de livro</title>
</head>
<body>
    <div class="header">  

    <?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioEmail']; echo "</span>";?> <br><br>
   <form class="formulario" method="POST" action="../Controller/controller_cadastrar_livro.php"> 

   
        <label for="titulo_trecho">Título do Trecho:</label>
        <input type="text" id="titulo_trecho" name="titulo_trecho" placeholder="Digite o Título do trecho*" required> <br><br><br>       
    
        <label for="trecho">Trecho:</label>
        <textarea id="trecho" name="trecho" rows="5" cols="33"> 
        </textarea>              
         <input type="submit" name="acao" value="Inserir trecho">        
        </div>   
</div>
</form>
<div class="header">  
<form  class="formulario" action="frm_livro.php">
    <input type="submit" value="Voltar">
</form>
</div>
</div>
</div>
</body>
</html>
<?php }?>