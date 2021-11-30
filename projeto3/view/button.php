<!-- delete -->
<div class='modal fade' id='del<?php echo $row['userid']; ?>' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                <center>
                    <h4 class='modal-title' id='myModalLabel'>Delete</h4>
                </center>
            </div>
            <div class='modal-body'>
                <?php
                include('../model/db_connect.php');
                $del = $dbh->prepare("SELECT * FROM USER WHERE userid='" . $row['userid'] . "'");
                $del->execute();
                $drow = $del->fetchAll();
                ?>
                <div class='container-fluid'>
                    <h5>
                        <center>Tem certeza que deseja apagar -> <strong><?php
                                                                            echo ucwords($row['firstname'] . ' ' . $row['lastname']); ?></strong> dessa lista? Essa alteração não pode ser desfeita!!!</center>
                    </h5>
                </div>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'><span class='gryphicon glyphicon-remove'></span>Cancelar</button>
                <a href="../controller/delete.php?id=<?php echo $row['userid']; ?>" class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span>Apagar</a>
            </div>
        </div>
    </div>
</div>
<!-- edit -->
<div class="modal fade" id='edit<?php echo $row['userid']; ?>' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                <center>
                    <h4 class='modal-title' id='myModalLabel'>Alterar o Registro</h4>
                </center>
            </div>
            <div class='modal-body'>
                <?php
                $edit = $dbh->prepare("SELECT * FROM USER WHERE userid='" . $row['userid'] . "'");
                $edit->execute();
                $temporario = $edit->fetchAll();
                foreach ($temporario as $erow);
                ?>
                <div class='container-fluid'>
                    <form method="post" action="../controller/edit.php?id=<?php echo $erow['userid']; ?>">
                        <div class='row'>
                            <div class='col-lg-2'>
                                <label style='position:relative; top:7px'>Nome</label>
                            </div>
                            <div class='col-lg-10'>
                                <input type="text" name='firstname' class='form-control' value='<?php echo $erow['firstname']; ?>'>
                            </div>
                        </div>
                        <div style='height:10px'></div>
                        <div class='row'>
                            <div class='col-lg-2'>
                                <label style='position:relative; top:7px'>Sobrenome</label>
                            </div>
                            <div class='col-lg-10'>
                                <input type="text" name='lastname' class='form-control' value='<?php echo $erow['lastname']; ?>'>
                            </div>
                        </div>
                        <div style='height:10px'></div>
                        <div class='row'>
                            <div class='col-lg-2'>
                                <label style='position:relative; top:7px'>Endereço</label>
                            </div>
                            <div class='col-lg-10'>
                                <input type="text" name='address' class='form-control' value='<?php echo $erow['address']; ?>'>
                            </div>
                        </div>
                </div>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'><span class='glyphicon glyphicon-remove'></span>Cancelar</button>
                <button type='submit' class='btn btn-warning'><span class='glyphivon glyphicon-check'></span>Salvar</button>
            </div>
        </div>
        </form>

    </div>
    </form>
</div>
</div>
</div>