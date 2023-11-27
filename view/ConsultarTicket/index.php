<?php
	require_once("../../config/conexion.php");
	if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
    <title>Help Desk Consultar Ticket</title>
</head>
<body class="with-side-menu">

	<?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>

	<?php require_once("../MainNav/nav.php");?>

<!--Contenido-->
	<div class="page-content">
		<div class="container-fluid">

			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Consultar Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Consultar Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
							<th style="width: 5%;">N° Ticket</th>
							<th style="width: 10%;">Categoria</th>
							<th class="d-none d-sm-table-cell" style="width: 40%;">Titulo</th>
							<th class="d-none d-sm-table-cell" style="width: 5%;">Estado</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha de Creación</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha de Asignación</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Soporte Asignado</th>
							<th class="text-center" style="width: 5%;">Ver Ticket</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>

		</div>
	</div>
<!--Contenido-->
    <?php require_once("modalasignar.php");?>

    <?php require_once("../MainJS/js.php");?>

	<script type="text/javascript" src="consultarticket.js"></script>
	
</body>
</html>
<?php
	} else {
		header("Location:".Conectar::ruta()."index.php");
	}
?>