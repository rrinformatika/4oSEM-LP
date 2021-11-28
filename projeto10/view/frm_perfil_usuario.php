<?php
session_start();
            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];

if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: frm_logar.html");
                
		exit;
		}else{ 
            // FECHAR COM '}' ESSA LINHA DEPOIS FINAL DO HTML
		
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos e Videogames</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<fieldset>
    <legend>Cadastro de Jogos</legend>
    <a href="frm_cadastrarJogos.php">Cadastrar um jogo</a><br><br>
    <a href="frm_cadastrarPlataforma.php">Cadastro de Plataformas</a>
</fieldset>
<div id='tabela-consulta'>
                    <table>
                        <tr>
                            <th>Nome do Jogo</th>
                            <th>Plataforma</th>
                            <th colspan="2">Opções</th>
                        </tr>

                        <?php
                        include_once("../Model/conexao.php");

                        $conn = conectar();
                        $jogos = "SELECT * from jogo inner join plataforma on jogo.plataforma = plataforma.idPlat";
                        $resultado_jogos = mysqli_query($conn, $jogos);
                        while ($row_jogos = mysqli_fetch_assoc($resultado_jogos)) {
                        ?>

                            <tr>
                                <td><?php echo $row_jogos['nomeJogo']; ?></td>
                                <td><?php echo $row_jogos['nomePlat']; ?></td>
                                <td><a href="frm_alterar.php?id=<?php echo $row_jogos['idJogo']?>"><button>Alterar</button></a></td>
                                <td><a href="frm_excluir.php?id=<?php echo $row_jogos['idJogo']?>"><button>Excluir</button></a></td>
                            </tr>

                        <?php } ?>

                    </table>
                </div>
<?php
    include '../model/footer.php';
?>
</body>
</html>
<?php }?>