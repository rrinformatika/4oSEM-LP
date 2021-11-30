<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Operações CRUD com PHP/PDO/Bootstrap e Modal</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:blue"><center><strong>Operações CRUD com PHP/PDO/Bootstrap e Modal <br> FATEC 2021 - GTI noturno 4º Semestre <br> Disciplina: Programação para Internet </strong></center></span>	
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Adicionar  </a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th style='text-align:center'>Nome</th>
				<th style='text-align:center'>Sobrenome</th>
				<th style='text-align:center'>Endereço</th>
				<th style='text-align:center'>Opções</th>
			</thead>
			<tbody>
			<?php
				include('../model/db_connect.php');
				$stmt = $dbh->prepare("select * from `user`");
                $stmt->execute();
                $query= $stmt->fetchAll();
				foreach($query as $row){
					?>
					<tr>
						<td><?php echo ucwords($row['firstname']); ?></td>
						<td><?php echo ucwords($row['lastname']); ?></td>
						<td><?php echo $row['address']; ?></td>
						<td style='text-align:center'>
							<a href="#edit<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Alterar</a> ||
							<a href="#del<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Apagar</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php } ?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?> 
</div>
</body>
</html>
