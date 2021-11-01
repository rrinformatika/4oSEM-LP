<?php
    require_once "C:/4oSEM-LP/projeto9_CRUD/controller/classe_pessoa.php";
    $p = new pessoa('projeto9', 'localhost', 'root', '');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Projeto de Cadastro de Clientes</title>
</head>
<body>
    <?php
    if(isset($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $telefone = addslashes($_POST['telefone']);
            $email = addslashes($_POST['email']);
            if(!empty($nome)&& !empty($telefone) && !empty($email)){
                if(!$p->cadastrar($nome, $telefone, $email)){
                    echo "email já cadastrado!";
                }else{
                    echo "Preencha todos os campos";
                }
            }
    }

    ?>
    <section id="esquerda">
        <form method="post">
            <h1>CADASTRAR PESSOA</h1>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php if(isset($res)){echo $res['nome'];}?>">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" value="<?php if(isset($res)){echo $res['telefone'];}?>">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php if(isset($res)){echo $res['email'];}?>">
            <input type="submit" value="<?php if(isset($res)){echo "Atualizar";}else{echo "Cadastrar";}?>">
        </form>

    </section>
    <section id="direita">
    <table>
            <tr id="titulo">
                <td>NOME</td>
                <td>TELEFONE</td>
                <td colspan="2">E-MAIL</td>
            </tr>
        <?php
        $dados = $p -> buscardados();
        if (count($dados) >0){
            for($i=0; $i< count($dados); $i++){
                echo "<tr id=corpo>";
                foreach ($dados[$i] as $k => $v){
                    if ($k != "id"){
                        echo "<td>".$v."</td>";

                    }
                }?> 
                <td>
                    <a href="index.php?idEditar=<?php
                    echo $dados[$i]['id'];?>">EDITAR</a>
                    <a href="index.php?idExcluir=<?php
                    echo $dados[$i]['id'];?>">EXCLUIR</a>
                </td>
            <?php
                echo "</tr>";
            }
        }else{
            echo "Banco de dados Vazio!!!";
        } ?>
 
        </table>
    </section>
    
</body>
</html>
<?php
   if(isset($_GET['idEditar'])){
    $id = addslashes($_GET['idEditar']);
    $p->editar($id);
    header('location: index.php');
}
     if(isset($_GET['idExcluir'])){
        $id = addslashes($_GET['idExcluir']);
        $p->excluir($id);
        header('location: index.php');
    }
?>