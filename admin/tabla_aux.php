<?php
session_start();
require_once("./conexion/conexion.php");
$db = new Database();
$con = $db->conectar();
$sql = $con->prepare("SELECT * FROM auxtransporte");
$sql->execute();
$resultado1 = $sql->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/ingreso2.css">
	<title>Document</title>


	<!--JQUERY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<!-- Los iconos tipo Solid de Fontawesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<!-- Nuestro css-->
	<link rel="stylesheet" type="text/css" href="../css/ingreso2.css" th:href="@{/css/ingreso2.css}">
	<!-- DATA TABLE -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

	<script type="text/javascript">
		$(document).ready(function() {
			//Asegurate que el id que le diste a la tabla sea igual al texto despues del simbolo #
			$('#userList').DataTable();
		});
	</script>
</head>

<body>
	<div class="container">
	<a href="../admin/admin.php" class="btn btn-secondary mt-3"><i class="fas fa-arrow-left"></i> Regresar</a>
		<div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
			<ul class="nav nav-tabs justify-content-end">
				<li class="nav-item">
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
					<div class="card">
						<div class="card-header">
							<h4>Auxilio de Transporte</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="userList" class="table table-bordered table-hover table-striped">
									<thead class="thead-light">
										<tr>
                                            <th scope="col">Id Aux.</th>
											<th scope="col">valor</th>
											<th></th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<?php
											$query = $con->prepare("SELECT * FROM auxtransporte");
											$query->execute();
											$resultados = $query->fetchAll(PDO::FETCH_ASSOC);
											?>
											<?php foreach ($resultados as $resul) { ?>
										<tr>
											<td> <?php echo  $resul['id_auxtransporte'];  ?> </td>
											<td> <?php echo $resul['valor']; ?></td>
											<td>
												<a href="?id=<?php echo $resul['id_auxtransporte'] ?>" class="btn btn-primary" onclick="window.open('update_aux.php?id=<?php echo $resul['id_auxtransporte'] ?>','','width= 700,height=700, toolbar=NO');void(null);">
													<i class="fas fa-edit"></i></a>
												<a href="delete_aux.php?id_auxtransporte=<?php echo $resul["id_auxtransporte"]; ?>" class="btn btn-primary" onclick="return confirm('¿Estás seguro de que quieres eliminar este arl?');">
													<i class="fas fa-user-times"></i>
												</a>
											</td>
										</tr>
									<?php } ?>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="../admin/cerrar.php" class="btn btn-primary mt-3"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
	</div>
</body>

</html>
