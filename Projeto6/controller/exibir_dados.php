<?php
if (isset($_POST['acao']) ){​
include_once"../model\cliente.php";
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
