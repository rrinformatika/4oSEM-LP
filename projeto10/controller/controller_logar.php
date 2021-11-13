<?php
 $botao=filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);    
 
if(isset($botao)){   

    include_once 'C:\4oSEM-LP\projeto10\model\crud.php';
    
 
$email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha=filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$usuario = new crud();
$usuario->setEmail($email);
$usuario->setSenha($senha);
$usuario->selecionar_Usuario();
        
}      
   
