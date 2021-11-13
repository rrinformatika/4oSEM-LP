<?php

if ( isset($_POST['acao']) ){
    
 include_once '../Model/crud.php' ;   
 
 
 $titulo_trecho= $_POST["titulo_trecho"];
 $trecho = $_POST["trecho"];


$inserir = new crud();

$inserir->inserir_Livro($titulo_trecho,$trecho); 
 
 
}