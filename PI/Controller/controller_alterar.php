<?php  
      
if ( isset($_POST['acao']) ){
    
 include_once '../Model/crud.php' ;   

$cod_trecho= $_POST['codigo_trecho'];
$titulo_trecho= $_POST["titulo_trecho"];
$trecho = $_POST["trecho"];


$alterar = new crud();

$alterar->alterar_livro($cod_trecho,$titulo_trecho,$trecho);
}      
   