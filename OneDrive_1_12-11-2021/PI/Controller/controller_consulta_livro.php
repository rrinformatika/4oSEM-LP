
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
<title>Consulta Trechos de Livros</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css"  href="../View/css/estilo_index.css"> 
</head>
<body>
<div>

<?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioEmail']; echo "</span>";?>
<table>
  <tr>
    <th>Titulo do Trecho</th>
    <th>Trecho</th>	
  </tr>  
  
  <?php 
    include_once("../Model/conexao.php");
    
    $conn= conectar();  
    

  $livro = "SELECT * FROM livro ORDER BY cod_trecho";
    
	$resultado_livro = mysqli_query($conn, $livro);
        
	while($row_livro = mysqli_fetch_assoc($resultado_livro)){ 
	
 ?>

  <tr>
  <td><?php echo $row_livro['titulo_trecho'];?></td>
	<td><?php echo $row_livro['trecho'];?></td>
	
  </tr>
  
  <?php }?>

</table>
<br>
<div class="header"> 
<form action="../View/sair.php">
<input type="submit" value="Deslogar" name="deslogar">
</form>
</div>
<div class="header">  
<form  class="formulario" action="../View/frm_livro.php">
    <input type="submit" value="Voltar">
</form>
</div>
</div>
</body>
</html>
    <?php }	