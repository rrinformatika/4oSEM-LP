<?php
session_start();

$_SESSION['usuarioEmail'];
$_SESSION['usuarioSenha'];

if (!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])) {

    header("Location: frm_logar.php");

    exit;
} else {

?>
    <html>

    <head>
        <title>Perfil Usuário </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
        <div class="header">
            <?php echo "<span>";
            echo "Olá, ";
            echo "</span>";
            echo "<span>";
            echo $_SESSION['usuarioEmail'];
            echo "</span>"; ?>
            <br><br>
            <a href="frm_cadJogos.php"><button>Cadastrar</button></a>


            <!-- <a href="frm_alterar.php"><button>Alterar</button></a>
            <a href="../Controller/controller_consulta_livro.php"><button>Consultar</button></a>
            <a href="frm_excluir.php"><button>Excluir</button></a> -->
            <tfoot>
                </form>
                <form class="formulario" action="frm_perfil_usuario.php">
                    <input type="submit" value="Voltar">
                </form>
            </tfoot>
            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <table>
                            <tr>
                                <th>Nome do Jogo</th>
                                <th>Plataforma</th>
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
                                </tr>

                            <?php } ?>

                        </table>
                    </div>
                </div>
                <?php
                include '../model/footer.php';
                ?>
    </body>

    </html>
<?php } ?>