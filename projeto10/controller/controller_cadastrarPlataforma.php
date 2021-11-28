<?php
$botao=filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);

if(isset($botao)){   
    
    include_once '../model/crud.php';
    
 
    // filter_input — Obtem a específica variável externa pelo nome e opcionalmente a filtra.
    //Remova todos os caracteres, exceto letras, dígitos e !#$%&'*+-=?^_`{|}~@.[].
    
    $plataforma = filter_input(INPUT_POST, 'plataforma', FILTER_SANITIZE_STRING);
    
    $usuario = new crud();       
    $usuario->setPlataforma($plataforma);
    $usuario->inserir_Plataforma();

}
?>



    
    
    
    

