<?php

    include_once '../model/cliente.php';

    if (isset($_POST['acao']) ){​
        $email=$_POST["email"];
        $nome=$_POST["nome"];
        $cpf=$_POST["cpf"];
        $endereco=$_POST["endereco"];
        $telefone=$_POST['telefone'];
        $senha=$_POST['senha'];
        $cliente = newcliente();
        $cliente->exibir_Dados($email,$nome,$cpf,$endereco,$telefone,$senha);
    }​
?>
