<?php
session_start();
            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];

if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: frm_logar.php");
                
		exit;
		}else{
		
?>
<html>
<head>
<title>Excluir</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css"  href="css/estilo_index.css">   
 </head>
<body>
<div class="header">
<?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioEmail']; echo "</span>";?>
<form class="formulario"  action="../Controller/controller_excluir.php" method="POST">
<div class="field">
<label>Digite o Código do Trecho:</label><input type="text" name="codigo_trecho"><br><br>
<input type="submit" value="Excluir Trecho" name="acao">
</form>
<form  class="formulario" action="frm_livro.php">
    <input type="submit" value="Voltar">
</form>
</div>
</body>
</html>

<?php }	