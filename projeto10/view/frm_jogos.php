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
            <a href="frm_cadastro_livro.php"><button>Insira trechos de sua autoria </button></a>

            <a href="frm_alterar.php"><button>Altere trechos de sua autoria</button></a>

            <a href="../Controller/controller_consulta_livro.php"><button>Consulte trechos de sua autoria</button></a>
            <a href="frm_excluir.php"><button>Exclua trechos de sua autoria</button></a>
<tfoot>
             </form>
            <form class="formulario" action="frm_perfil_usuario.php">
                <input type="submit" value="Voltar">
            </form>
            </tfoot>
        </div>
            <?php 
            include '../model/footer.php';
            ?>
    </body>

    </html>
<?php } ?>