<?php
$botao=filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);

if(isset($botao)){   
    
    include_once '../Model/crud.php';
    
 
    // filter_input — Obtem a específica variável externa pelo nome e opcionalmente a filtra.
    //Remova todos os caracteres, exceto letras, dígitos e !#$%&'*+-=?^_`{|}~@.[].
    
    $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $nome= filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $endereco=filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $telefone=filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $senha=filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    
    if((!$email) || (!$nome) || (!$endereco) || (!$telefone) || (!$senha)){
        
         echo"<script language='javascript' type='text/javascript'>alert('Preencham todos os campos');window.location.href='../View/frm_cadastrar.html';</script>";
         
    }else{
    $usuario = new crud();       
    $usuario->setEmail($email);
    $usuario->setNome($nome);
    $usuario->setEndereco($endereco);
    $usuario->setTelefone($telefone);
    $usuario->setSenha($senha);
    $usuario->inserir_Usuario();
}
}


    
    
    
    

