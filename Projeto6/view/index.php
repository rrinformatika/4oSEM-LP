<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>

<body>

    
    <form method="POST" action="exibir.php">
        <div>
            <label>Email:</label>
            <input type="email" name="email" placeholder="Digite seu email*" required> <br><br>
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Digite seu nome*" required> <br><br>
            <label>Cpf:</label>
            <input type="text" name="cpf" placeholder="Digite seu cpf*" required><br><br>
            <label>Endereço:</label>
            <input type="text" name="endereco" placeholder="Digite seu endereço*" required><br><br>
            <label>Telefone:</label>
            <input type="tel" name="telefone" placeholder="Digite seu telefone*" required><br><br>
            <label>Senha:</label>
            <input type="password" name="senha" placeholder="Digite sua senha*" required><br><br>
            <input type="submit" name="acao" value="Cadastrar">
        </div>
        </div>
    </form>
</body>

</html>