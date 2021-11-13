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
<title>Perfil Usuário </title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css"  href="css/estilo_index.css"> 
</head>
<body>
<div class="header"> 
<?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioEmail']; echo "</span>";?>
<br><br>
<a href="frm_cadastro_livro.php"><button>Insira trechos de sua autoria </button></a> 

<a href="frm_alterar.php"><button>Altere trechos de sua autoria</button></a>

<a href="../Controller/controller_consulta_livro.php"><button>Consulte trechos de sua autoria</button></a>
<a href="frm_excluir.php"><button>Exclua trechos de sua autoria</button></a>

<form  class="formulario" action="sair.php">
<input type="submit" value="Deslogar" name="deslogar">
</form>
<form  class="formulario" action="frm_perfil_usuario.php">
    <input type="submit" value="Voltar">
</form>
</div>
</body>
</html>
<?php }?>	