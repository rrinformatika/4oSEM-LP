<!-- ESSE FORM ADICIONA UMA NOVA COLUNA AO BANCO DE DADOS -->
<div class='modal fade' id='addnew' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                <center><h4 class='modal-title' id='myModalLabel'>Criar novo registro</h4></center>
            </div>
            <div class='modal-body'>
                <div class='container-fluid'>
                    <form action="addnew.php" method="post">
                        <div class='row'>
                            <div class='col-lg-2'>
                                <label class='control-label' stule='position:relative; top:7px;'>Nome:</label>
                            </div>
                            <div class='col-lg-10'>
                                <input type="text" class='form-control' name="firstname">
                            </div>
                        </div>
                        <div style='height:10px'></div>
                        <div class='row'>
                            <div class='col-lg-2'>
                                <label class='control-label' style='position:relative; top:7px;'>Sobrenome</label>
                            </div>
                            <div class='col-lg-10'>
                                <input type="text" class='form-control' name="lastname">
                            </div>
                        </div>
                        <div style='height:10px;'></div>
                        <div class='row'>
                            <div class='col-lg-2'>
                                <label class='control-label' style='position:relative; top:7px'>Endereço</label>
                            </div>
                            <div class='col-lg-10'>
                                <input type="text" class='form-control' name="address">
                            </div>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn-default' data-dismiss='modal'><span class='glyphicon glyphicon-remove'></span>Cancelar</button>
                            <button type="submit" class='btn btn-primary'><span class='glyphicon glyphicon-floppy-disk'></span>Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>