<?php 
	session_start();
	error_reporting(0);
	if($_SESSION["sesion"]==1):
	
?>
<?php 
	include 'MasterPages.php';
	include 'style.php';
?>

 <html>
 	<head>
 		<style type="text/css">a {text-decoration: none}</style>
 	</head>
	<body class="body">
		<div class="container">
			<?php if($_GET['flag'] == 1): ?>
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<h5>Se ACTUALIZO con exito.</h5>
				</div>
			<?php elseif($_GET['flag'] == 2): ?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<h5>Se produjo un error al intentar actulizar la informacion</h5>
				</div>
			<?php elseif($_GET['flag'] == 3): ?>
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<h5>Se Borro con exito</h5>
				</div>	
			<?php endif; ?>
			<div class="row divcontent" id="divcontent">
				<h1 class="cuerpo" id="cuerpo">Amigos</h1>
				<br>
				<?php 
					include 'indexmy.php';
					$db = new conexion();
					$query = "SELECT * FROM Amigos";
					$row = $db->Select($query);
		 		?>	
				<table class="table table-condensed ">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Movil</th>
						<th>Correo</th>
						<th>Foto</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>	
				<?php  foreach ($row as $rows): ?> 	
					<tr>
						<?php
							echo "<td>".$rows['Ami_ID']."</td>"; 
							echo "<td>".$rows['Ami_Nombre']."</td>";
							echo "<td>".$rows['Ami_Apellido']."</td>";
							echo "<td>".$rows['Ami_Celular']."</td>";
							echo "<td>".$rows['Ami_Correo']."</td>";
							echo "<td><img src=".$rows['Ami_Pic']." alt='hello' height='52' width='52'></td>";
							session_start();
							if($_SESSION['UserType'] === 'Admin' || $_SESSION['UserType'] === 'Normal'){
							echo "<td><a href='detalleamigo.php?id=".$rows['Ami_ID']."' class='btn btn-success btn-xs'>Ver Amigo</a> <a href='editaramigo.php?id=".$rows['Ami_ID']."' class='btn btn-primary btn-xs'>Editar</a> <a href='borraramigo.php?id=".$rows['Ami_ID']."' class='btn btn-danger btn-xs'>Eliminar</a></td>";
						 	}
						 ?>
					</tr>
				<?php endforeach; ?>

				</tbody>	
				</table>
			</div>
		</div>
	</body>
 </html>



<?php else: ?>
<?php header('Location: restrinc.php');  ?>
<?php endif;?>